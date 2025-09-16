<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class CurrencyFormats
{
    protected $moneyFormat;
    protected $moneyInEmailsFormat;
    protected $moneyWithCurrencyFormat;
    protected $moneyWithCurrencyInEmailsFormat;

    
    /**
     * @return string
     */
    public function getMoneyFormat()
    {
        return $this->moneyFormat;
    }

    
    /**
     * @return string
     */
    public function getMoneyInEmailsFormat()
    {
        return $this->moneyInEmailsFormat;
    }

    
    /**
     * @return string
     */
    public function getMoneyWithCurrencyFormat()
    {
        return $this->moneyWithCurrencyFormat;
    }

    
    /**
     * @return string
     */
    public function getMoneyWithCurrencyInEmailsFormat()
    {
        return $this->moneyWithCurrencyInEmailsFormat;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['moneyFormat']) && $data['moneyFormat'] !== null) {
                $instance->moneyFormat = $data['moneyFormat'];
            }
            if (isset($data['moneyInEmailsFormat']) && $data['moneyInEmailsFormat'] !== null) {
                $instance->moneyInEmailsFormat = $data['moneyInEmailsFormat'];
            }
            if (isset($data['moneyWithCurrencyFormat']) && $data['moneyWithCurrencyFormat'] !== null) {
                $instance->moneyWithCurrencyFormat = $data['moneyWithCurrencyFormat'];
            }
            if (isset($data['moneyWithCurrencyInEmailsFormat']) && $data['moneyWithCurrencyInEmailsFormat'] !== null) {
                $instance->moneyWithCurrencyInEmailsFormat = $data['moneyWithCurrencyInEmailsFormat'];
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
            if ($this->moneyFormat !== null) {
                $data['moneyFormat'] = $this->moneyFormat;
            }
            if ($this->moneyInEmailsFormat !== null) {
                $data['moneyInEmailsFormat'] = $this->moneyInEmailsFormat;
            }
            if ($this->moneyWithCurrencyFormat !== null) {
                $data['moneyWithCurrencyFormat'] = $this->moneyWithCurrencyFormat;
            }
            if ($this->moneyWithCurrencyInEmailsFormat !== null) {
                $data['moneyWithCurrencyInEmailsFormat'] = $this->moneyWithCurrencyInEmailsFormat;
            }
            return $data;
        }
}
