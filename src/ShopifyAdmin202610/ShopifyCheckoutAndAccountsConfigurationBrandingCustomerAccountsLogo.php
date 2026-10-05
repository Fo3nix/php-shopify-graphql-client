<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingImageValue;

class ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsLogo
{
    protected $image;
    protected $maxWidth;

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingImageValue
     */
    public function getImage()
    {
        return $this->image;
    }

    
    /**
     * @return int
     */
    public function getMaxWidth()
    {
        return $this->maxWidth;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['image']) && $data['image'] !== null) {
                $instance->image = ShopifyCheckoutAndAccountsConfigurationBrandingImageValue::fromArray($data['image']);
            }
            if (isset($data['maxWidth']) && $data['maxWidth'] !== null) {
                $instance->maxWidth = $data['maxWidth'];
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->image !== null) {
                $data['image'] = $this->image->asArray();
            }
            if ($this->maxWidth !== null) {
                $data['maxWidth'] = $this->maxWidth;
            }
            return $data;
        }
}
