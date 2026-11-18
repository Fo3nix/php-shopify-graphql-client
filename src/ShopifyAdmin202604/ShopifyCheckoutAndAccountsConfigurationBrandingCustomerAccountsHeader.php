<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCheckoutAndAccountsConfigurationBrandingColors;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsLogo;

/**
 * The checkout header customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsHeader
{
    protected $alignment;
    protected $colors;
    protected $logo;
    protected $padding;

    
    /**
     * The header alignment.
     *
     * @return string A ShopifyCheckoutAndAccountsConfigurationBrandingHeaderAlignmentEnumObject value
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
     * The store logo.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsLogo
     */
    public function getLogo(): ?ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsLogo
    {
        return $this->logo;
    }

    
    /**
     * The padding of the header container.
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
            if (isset($data['logo']) && $data['logo'] !== null) {
                $instance->logo = ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsLogo::fromArray($data['logo']);
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
            if ($this->logo !== null) {
                $data['logo'] = $this->logo->asArray();
            }
            if ($this->padding !== null) {
                $data['padding'] = $this->padding;
            }
            return $data;
        }
}
