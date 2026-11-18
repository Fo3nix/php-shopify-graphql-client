<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingComponents;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingDesignTokens;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingSurfaces;

/**
 * The branding configuration for checkout and customer accounts.
 */
class ShopifyCheckoutAndAccountsConfigurationBranding
{
    protected $components;
    protected $designTokens;
    protected $surfaces;

    
    /**
     * The components that apply to all surfaces.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingComponents
     */
    public function getComponents(): ?ShopifyCheckoutAndAccountsConfigurationBrandingComponents
    {
        return $this->components;
    }

    
    /**
     * The design tokens allow you to set values that represent specific attributes of your brand like color and font. These attributes are used throughout the user interface. This brings consistency and allows you to easily make broad design changes.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingDesignTokens
     */
    public function getDesignTokens(): ?ShopifyCheckoutAndAccountsConfigurationBrandingDesignTokens
    {
        return $this->designTokens;
    }

    
    /**
     * The surface-specific customizations.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingSurfaces
     */
    public function getSurfaces(): ?ShopifyCheckoutAndAccountsConfigurationBrandingSurfaces
    {
        return $this->surfaces;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['components']) && $data['components'] !== null) {
                $instance->components = ShopifyCheckoutAndAccountsConfigurationBrandingComponents::fromArray($data['components']);
            }
            if (isset($data['designTokens']) && $data['designTokens'] !== null) {
                $instance->designTokens = ShopifyCheckoutAndAccountsConfigurationBrandingDesignTokens::fromArray($data['designTokens']);
            }
            if (isset($data['surfaces']) && $data['surfaces'] !== null) {
                $instance->surfaces = ShopifyCheckoutAndAccountsConfigurationBrandingSurfaces::fromArray($data['surfaces']);
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
            if ($this->components !== null) {
                $data['components'] = $this->components->asArray();
            }
            if ($this->designTokens !== null) {
                $data['designTokens'] = $this->designTokens->asArray();
            }
            if ($this->surfaces !== null) {
                $data['surfaces'] = $this->surfaces->asArray();
            }
            return $data;
        }
}
