<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * Information about the credit card used for this transaction.
 */
class ShopifyTenderTransactionCreditCardDetails
{
    protected $creditCardCompany;
    protected $creditCardNumber;

    
    /**
     * The name of the company that issued the customer's credit card. Example: `Visa`.
     *
     * @return string
     */
    public function getCreditCardCompany(): ?string
    {
        return $this->creditCardCompany;
    }

    
    /**
     * The customer's credit card number, with all digits except the last 4 redacted. Example: `•••• •••• •••• 1234`
     *
     * @return string
     */
    public function getCreditCardNumber(): ?string
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
