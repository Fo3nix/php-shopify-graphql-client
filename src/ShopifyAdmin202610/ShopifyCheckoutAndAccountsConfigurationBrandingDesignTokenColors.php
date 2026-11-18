<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingPalette;

/**
 * The color customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingDesignTokenColors
{
    protected $palette;

    
    /**
     * A set of colors used together on a surface.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingPalette
     */
    public function getPalette(): ?ShopifyCheckoutAndAccountsConfigurationBrandingPalette
    {
        return $this->palette;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['palette']) && $data['palette'] !== null) {
                $instance->palette = ShopifyCheckoutAndAccountsConfigurationBrandingPalette::fromArray($data['palette']);
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
            if ($this->palette !== null) {
                $data['palette'] = $this->palette->asArray();
            }
            return $data;
        }
}
