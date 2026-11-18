<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingSignInLogo;

/**
 * The sign-in header customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSignInHeader
{
    protected $logo;
    protected $padding;

    
    /**
     * The store logo.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingSignInLogo
     */
    public function getLogo(): ?ShopifyCheckoutAndAccountsConfigurationBrandingSignInLogo
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
            if (isset($data['logo']) && $data['logo'] !== null) {
                $instance->logo = ShopifyCheckoutAndAccountsConfigurationBrandingSignInLogo::fromArray($data['logo']);
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
            if ($this->logo !== null) {
                $data['logo'] = $this->logo->asArray();
            }
            if ($this->padding !== null) {
                $data['padding'] = $this->padding;
            }
            return $data;
        }
}
