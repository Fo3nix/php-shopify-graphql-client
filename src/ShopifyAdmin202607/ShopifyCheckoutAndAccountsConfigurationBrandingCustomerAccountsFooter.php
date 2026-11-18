<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingColors;

/**
 * A container for the customer accounts footer section customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsFooter
{
    protected $alignment;
    protected $colors;
    protected $padding;

    
    /**
     * The footer alignment.
     *
     * @return string A ShopifyCheckoutAndAccountsConfigurationBrandingFooterAlignmentEnumObject value
     */
    public function getAlignment(): ?string
    {
        return $this->alignment;
    }

    
    /**
     * The colors customizations.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingColors
     */
    public function getColors(): ?ShopifyCheckoutAndAccountsConfigurationBrandingColors
    {
        return $this->colors;
    }

    
    /**
     * The padding of the footer container.
     *
     * @return string A ShopifyCheckoutAndAccountsConfigurationBrandingSpacingKeywordEnumObject value
     */
    public function getPadding(): ?string
    {
        return $this->padding;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['alignment']) && $data['alignment'] !== null) {
                $instance->alignment = $data['alignment'];
            }
            if (isset($data['colors']) && $data['colors'] !== null) {
                $instance->colors = ShopifyCheckoutAndAccountsConfigurationBrandingColors::fromArray($data['colors']);
            }
            if (isset($data['padding']) && $data['padding'] !== null) {
                $instance->padding = $data['padding'];
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
            if ($this->alignment !== null) {
                $data['alignment'] = $this->alignment;
            }
            if ($this->colors !== null) {
                $data['colors'] = $this->colors->asArray();
            }
            if ($this->padding !== null) {
                $data['padding'] = $this->padding;
            }
            return $data;
        }
}
