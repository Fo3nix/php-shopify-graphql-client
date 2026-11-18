<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCheckoutBrandingColors;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCheckoutBrandingCornerRadiusVariables;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCheckoutBrandingTypography;

/**
 * The design system allows you to set values that represent specific attributes
 * of your brand like color and font. These attributes are used throughout the user
 * interface. This brings consistency and allows you to easily make broad design changes.
 */
class ShopifyCheckoutBrandingDesignSystem
{
    protected $colors;
    protected $cornerRadius;
    protected $typography;

    
    /**
     * The color settings for global colors and color schemes.
     *
     * @return ShopifyCheckoutBrandingColors
     */
    public function getColors(): ?ShopifyCheckoutBrandingColors
    {
        return $this->colors;
    }

    
    /**
     * The corner radius variables.
     *
     * @return ShopifyCheckoutBrandingCornerRadiusVariables
     */
    public function getCornerRadius(): ?ShopifyCheckoutBrandingCornerRadiusVariables
    {
        return $this->cornerRadius;
    }

    
    /**
     * The typography.
     *
     * @return ShopifyCheckoutBrandingTypography
     */
    public function getTypography(): ?ShopifyCheckoutBrandingTypography
    {
        return $this->typography;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['colors']) && $data['colors'] !== null) {
                $instance->colors = ShopifyCheckoutBrandingColors::fromArray($data['colors']);
            }
            if (isset($data['cornerRadius']) && $data['cornerRadius'] !== null) {
                $instance->cornerRadius = ShopifyCheckoutBrandingCornerRadiusVariables::fromArray($data['cornerRadius']);
            }
            if (isset($data['typography']) && $data['typography'] !== null) {
                $instance->typography = ShopifyCheckoutBrandingTypography::fromArray($data['typography']);
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
            if ($this->colors !== null) {
                $data['colors'] = $this->colors->asArray();
            }
            if ($this->cornerRadius !== null) {
                $data['cornerRadius'] = $this->cornerRadius->asArray();
            }
            if ($this->typography !== null) {
                $data['typography'] = $this->typography->asArray();
            }
            return $data;
        }
}
