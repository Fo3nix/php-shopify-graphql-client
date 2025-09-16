<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class TenderTransactionCreditCardDetails
{
    protected $creditCardCompany;
    protected $creditCardNumber;

    
    /**
     * @return string
     */
    public function getCreditCardCompany()
    {
        return $this->creditCardCompany;
    }

    
    /**
     * @return string
     */
    public function getCreditCardNumber()
    {
        return $this->creditCardNumber;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['creditCardCompany']) && $data['creditCardCompany'] !== null) {
                $instance->creditCardCompany = $data['creditCardCompany'];
            }
            if (isset($data['creditCardNumber']) && $data['creditCardNumber'] !== null) {
                $instance->creditCardNumber = $data['creditCardNumber'];
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
            if ($this->creditCardCompany !== null) {
                $data['creditCardCompany'] = $this->creditCardCompany;
            }
            if ($this->creditCardNumber !== null) {
                $data['creditCardNumber'] = $this->creditCardNumber;
            }
            return $data;
        }
}
