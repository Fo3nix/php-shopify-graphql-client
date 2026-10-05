<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingFontGroup;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingFontSize;

class ShopifyCheckoutAndAccountsConfigurationBrandingTypography
{
    protected $primary;
    protected $secondary;
    protected $size;

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingFontGroup
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingFontGroup
     */
    public function getSecondary()
    {
        return $this->secondary;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingFontSize
     */
    public function getSize()
    {
        return $this->size;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['primary']) && $data['primary'] !== null) {
                $instance->primary = ShopifyCheckoutAndAccountsConfigurationBrandingFontGroup::fromArray($data['primary']);
            }
            if (isset($data['secondary']) && $data['secondary'] !== null) {
                $instance->secondary = ShopifyCheckoutAndAccountsConfigurationBrandingFontGroup::fromArray($data['secondary']);
            }
            if (isset($data['size']) && $data['size'] !== null) {
                $instance->size = ShopifyCheckoutAndAccountsConfigurationBrandingFontSize::fromArray($data['size']);
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
            if ($this->primary !== null) {
                $data['primary'] = $this->primary->asArray();
            }
            if ($this->secondary !== null) {
                $data['secondary'] = $this->secondary->asArray();
            }
            if ($this->size !== null) {
                $data['size'] = $this->size->asArray();
            }
            return $data;
        }
}
