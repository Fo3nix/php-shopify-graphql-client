<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingTypographyStyle;

/**
 * The text fields customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingTextField
{
    protected $border;
    protected $typography;

    
    /**
     * The border.
     *
     * @return string A ShopifyCheckoutAndAccountsConfigurationBrandingBorderEnumObject value
     */
    public function getBorder(): ?string
    {
        return $this->border;
    }

    
    /**
     * The typography.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingTypographyStyle
     */
    public function getTypography(): ?ShopifyCheckoutAndAccountsConfigurationBrandingTypographyStyle
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
            if (isset($data['border']) && $data['border'] !== null) {
                $instance->border = $data['border'];
            }
            if (isset($data['typography']) && $data['typography'] !== null) {
                $instance->typography = ShopifyCheckoutAndAccountsConfigurationBrandingTypographyStyle::fromArray($data['typography']);
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
            if ($this->border !== null) {
                $data['border'] = $this->border;
            }
            if ($this->typography !== null) {
                $data['typography'] = $this->typography->asArray();
            }
            return $data;
        }
}
