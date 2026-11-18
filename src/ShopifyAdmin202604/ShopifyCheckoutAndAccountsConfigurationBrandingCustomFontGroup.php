<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCheckoutAndAccountsConfigurationBrandingCustomFont;

/**
 * The custom font group customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroup
{
    protected $base;
    protected $bold;
    protected $loadingStrategy;
    protected $name;

    
    /**
     * The base custom font.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingCustomFont
     */
    public function getBase(): ?ShopifyCheckoutAndAccountsConfigurationBrandingCustomFont
    {
        return $this->base;
    }

    
    /**
     * The bold custom font.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingCustomFont
     */
    public function getBold(): ?ShopifyCheckoutAndAccountsConfigurationBrandingCustomFont
    {
        return $this->bold;
    }

    
    /**
     * The font loading strategy.
     *
     * @return string A ShopifyCheckoutAndAccountsConfigurationBrandingFontLoadingStrategyEnumObject value
     */
    public function getLoadingStrategy(): ?string
    {
        return $this->loadingStrategy;
    }

    
    /**
     * The font group name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['base']) && $data['base'] !== null) {
                $instance->base = ShopifyCheckoutAndAccountsConfigurationBrandingCustomFont::fromArray($data['base']);
            }
            if (isset($data['bold']) && $data['bold'] !== null) {
                $instance->bold = ShopifyCheckoutAndAccountsConfigurationBrandingCustomFont::fromArray($data['bold']);
            }
            if (isset($data['loadingStrategy']) && $data['loadingStrategy'] !== null) {
                $instance->loadingStrategy = $data['loadingStrategy'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
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
            if ($this->base !== null) {
                $data['base'] = $this->base->asArray();
            }
            if ($this->bold !== null) {
                $data['bold'] = $this->bold->asArray();
            }
            if ($this->loadingStrategy !== null) {
                $data['loadingStrategy'] = $this->loadingStrategy;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            return $data;
        }
}
