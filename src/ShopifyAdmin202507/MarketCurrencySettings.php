<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CurrencySetting;

class MarketCurrencySettings
{
    protected $baseCurrency;
    protected $localCurrencies;
    protected $roundingEnabled;

    
    /**
     * @return CurrencySetting
     */
    public function getBaseCurrency()
    {
        return $this->baseCurrency;
    }

    
    /**
     * @return bool
     */
    public function getLocalCurrencies()
    {
        return $this->localCurrencies;
    }

    
    /**
     * @return bool
     */
    public function getRoundingEnabled()
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
                $instance->baseCurrency = CurrencySetting::fromArray($data['baseCurrency']);
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
