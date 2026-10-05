<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyGiftCardProductSettings
{
    protected $crossCurrencyRedeemable;
    protected $issuanceCurrency;

    
    /**
     * @return bool
     */
    public function getCrossCurrencyRedeemable()
    {
        return $this->crossCurrencyRedeemable;
    }

    
    /**
     * @return ShopifyCurrencyCodeEnumObject
     */
    public function getIssuanceCurrency()
    {
        return $this->issuanceCurrency;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['crossCurrencyRedeemable']) && $data['crossCurrencyRedeemable'] !== null) {
                $instance->crossCurrencyRedeemable = $data['crossCurrencyRedeemable'];
            }
            if (isset($data['issuanceCurrency']) && $data['issuanceCurrency'] !== null) {
                $instance->issuanceCurrency = $data['issuanceCurrency'];
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
            if ($this->crossCurrencyRedeemable !== null) {
                $data['crossCurrencyRedeemable'] = $this->crossCurrencyRedeemable;
            }
            if ($this->issuanceCurrency !== null) {
                $data['issuanceCurrency'] = $this->issuanceCurrency;
            }
            return $data;
        }
}
