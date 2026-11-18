<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCurrencySetting;

/**
 * A market's currency settings.
 */
class ShopifyMarketCurrencySettings
{
    protected $baseCurrency;
    protected $localCurrencies;
    protected $roundingEnabled;

    
    /**
     * The currency which this market's customers must use if local currencies are disabled.
     *
     * @return ShopifyCurrencySetting
     */
    public function getBaseCurrency(): ?ShopifyCurrencySetting
    {
        return $this->baseCurrency;
    }

    
    /**
     * Whether or not local currencies are enabled. If enabled, then prices will
     * be converted to give each customer the best experience based on their
     * region. If disabled, then all customers in this market will see prices
     * in the market's base currency.
     *
     * @return bool
     */
    public function getLocalCurrencies(): ?bool
    {
        return $this->localCurrencies;
    }

    
    /**
     * Whether or not rounding is enabled on multi-currency prices.
     *
     * @return bool
     */
    public function getRoundingEnabled(): ?bool
    {
        return $this->roundingEnabled;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['baseCurrency']) && $data['baseCurrency'] !== null) {
                $instance->baseCurrency = ShopifyCurrencySetting::fromArray($data['baseCurrency']);
            }
            if (isset($data['localCurrencies']) && $data['localCurrencies'] !== null) {
                $instance->localCurrencies = $data['localCurrencies'];
            }
            if (isset($data['roundingEnabled']) && $data['roundingEnabled'] !== null) {
                $instance->roundingEnabled = $data['roundingEnabled'];
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
            if ($this->baseCurrency !== null) {
                $data['baseCurrency'] = $this->baseCurrency->asArray();
            }
            if ($this->localCurrencies !== null) {
                $data['localCurrencies'] = $this->localCurrencies;
            }
            if ($this->roundingEnabled !== null) {
                $data['roundingEnabled'] = $this->roundingEnabled;
            }
            return $data;
        }
}
