<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPaymentInstrumentHydrator;

/**
 * A payment instrument and the permission
 * the owner of the instrument gives to the merchant to debit it.
 */
class ShopifyPaymentMandate implements ShopifyNode
{
    protected $id;
    protected $paymentInstrument;

    
    /**
     * The unique ID of a payment mandate.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The outputs details of the payment instrument.
     *
     * @return ShopifyBankAccount|ShopifyVaultCreditCard|ShopifyVaultPaypalBillingAgreement
     */
    public function getPaymentInstrument(): ShopifyBankAccount|ShopifyVaultCreditCard|ShopifyVaultPaypalBillingAgreement|null
    {
        return $this->paymentInstrument;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['paymentInstrument']) && $data['paymentInstrument'] !== null) {
                $instance->paymentInstrument = ShopifyPaymentInstrumentHydrator::fromArray($data['paymentInstrument']);
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->paymentInstrument !== null) {
                $data['paymentInstrument'] = ShopifyPaymentInstrumentHydrator::toArray($this->paymentInstrument);
            }
            return $data;
        }
}
