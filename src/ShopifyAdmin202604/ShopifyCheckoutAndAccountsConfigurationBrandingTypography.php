<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCheckoutAndAccountsConfigurationBrandingFontGroupHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCheckoutAndAccountsConfigurationBrandingFontSize;

/**
 * The typography customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingTypography
{
    protected $primary;
    protected $secondary;
    protected $size;

    
    /**
     * The font group used for most components such as text, buttons and form controls.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroup|ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroup
     */
    public function getPrimary(): ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroup|ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroup|null
    {
        return $this->primary;
    }

    
    /**
     * The font group used for heading components by default.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroup|ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroup
     */
    public function getSecondary(): ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroup|ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroup|null
    {
        return $this->secondary;
    }

    
    /**
     * The font size (base size in pixels and scaling between different sizes).
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingFontSize
     */
    public function getSize(): ?ShopifyCheckoutAndAccountsConfigurationBrandingFontSize
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
                $instance->primary = ShopifyCheckoutAndAccountsConfigurationBrandingFontGroupHydrator::fromArray($data['primary']);
            }
            if (isset($data['secondary']) && $data['secondary'] !== null) {
                $instance->secondary = ShopifyCheckoutAndAccountsConfigurationBrandingFontGroupHydrator::fromArray($data['secondary']);
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
                $data['primary'] = ShopifyCheckoutAndAccountsConfigurationBrandingFontGroupHydrator::toArray($this->primary);
            }
            if ($this->secondary !== null) {
                $data['secondary'] = ShopifyCheckoutAndAccountsConfigurationBrandingFontGroupHydrator::toArray($this->secondary);
            }
            if ($this->size !== null) {
                $data['size'] = $this->size->asArray();
            }
            return $data;
        }
}
