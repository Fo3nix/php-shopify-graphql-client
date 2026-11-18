<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingImageValueHydrator;

/**
 * The customer accounts store logo customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsLogo
{
    protected $image;
    protected $maxWidth;

    
    /**
     * The logo image.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingImage
     */
    public function getImage(): ?ShopifyCheckoutAndAccountsConfigurationBrandingImage
    {
        return $this->image;
    }

    
    /**
     * The maximum width of the logo.
     *
     * @return int
     */
    public function getMaxWidth(): ?int
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
                $instance->image = ShopifyCheckoutAndAccountsConfigurationBrandingImageValueHydrator::fromArray($data['image']);
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
                $data['image'] = ShopifyCheckoutAndAccountsConfigurationBrandingImageValueHydrator::toArray($this->image);
            }
            if ($this->maxWidth !== null) {
                $data['maxWidth'] = $this->maxWidth;
            }
            return $data;
        }
}
