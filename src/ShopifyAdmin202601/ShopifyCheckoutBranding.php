<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCheckoutBrandingCustomizations;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCheckoutBrandingDesignSystem;

/**
 * Creates a unified visual identity for your checkout that keeps customers engaged and reinforces your brand throughout the purchase process. This comprehensive branding system lets you control every visual aspect of checkout, from colors and fonts to layouts and imagery, so your checkout feels like a natural extension of your store.
 *
 * For example, a luxury fashion retailer can configure their checkout with custom color palettes, premium typography, rounded corners for a softer feel, and branded imagery that matches their main website aesthetic.
 *
 * Use the `Branding` object to:
 * - Configure comprehensive checkout visual identity
 * - Coordinate color schemes across all checkout elements
 * - Apply consistent typography and spacing standards
 * - Manage background imagery and layout customizations
 * - Control visibility of various checkout components
 *
 * The branding configuration includes design system foundations like color roles, typography scales, and spacing units, plus specific customizations for sections, dividers, and interactive elements. This allows merchants to create cohesive checkout experiences that reinforce their brand identity while maintaining usability standards.
 *
 * Different color schemes can be defined for various contexts, ensuring optimal contrast and accessibility across different checkout states and customer preferences.
 */
class ShopifyCheckoutBranding
{
    protected $customizations;
    protected $designSystem;

    
    /**
     * The customizations that apply to specific components or areas of the user interface.
     *
     * @return ShopifyCheckoutBrandingCustomizations
     */
    public function getCustomizations(): ?ShopifyCheckoutBrandingCustomizations
    {
        return $this->customizations;
    }

    
    /**
     * The design system allows you to set values that represent specific attributes
     * of your brand like color and font. These attributes are used throughout the user
     * interface. This brings consistency and allows you to easily make broad design changes.
     *
     * @return ShopifyCheckoutBrandingDesignSystem
     */
    public function getDesignSystem(): ?ShopifyCheckoutBrandingDesignSystem
    {
        return $this->designSystem;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['customizations']) && $data['customizations'] !== null) {
                $instance->customizations = ShopifyCheckoutBrandingCustomizations::fromArray($data['customizations']);
            }
            if (isset($data['designSystem']) && $data['designSystem'] !== null) {
                $instance->designSystem = ShopifyCheckoutBrandingDesignSystem::fromArray($data['designSystem']);
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
            if ($this->customizations !== null) {
                $data['customizations'] = $this->customizations->asArray();
            }
            if ($this->designSystem !== null) {
                $data['designSystem'] = $this->designSystem->asArray();
            }
            return $data;
        }
}
