<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCustomerPaymentInstrumentBillingAddress;

/**
 * Represents a PayPal instrument for customer payment method.
 */
class ShopifyCustomerPaypalBillingAgreement
{
    protected $billingAddress;
    protected $inactive;
    protected $isRevocable;
    protected $paypalAccountEmail;

    
    /**
     * The billing address of this payment method.
     *
     * @return ShopifyCustomerPaymentInstrumentBillingAddress
     */
    public function getBillingAddress(): ?ShopifyCustomerPaymentInstrumentBillingAddress
    {
        return $this->billingAddress;
    }

    
    /**
     * Whether the PayPal billing agreement is inactive.
     *
     * @return bool
     */
    public function getInactive(): ?bool
    {
        return $this->inactive;
    }

    
    /**
     * Whether the payment method can be revoked.The payment method can be revoked if there are no active subscription contracts.
     *
     * @return bool
     */
    public function getIsRevocable(): ?bool
    {
        return $this->isRevocable;
    }

    
    /**
     * The customers's PayPal account email address.
     *
     * @return string
     */
    public function getPaypalAccountEmail(): ?string
    {
        return $this->paypalAccountEmail;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['billingAddress']) && $data['billingAddress'] !== null) {
                $instance->billingAddress = ShopifyCustomerPaymentInstrumentBillingAddress::fromArray($data['billingAddress']);
            }
            if (isset($data['inactive']) && $data['inactive'] !== null) {
                $instance->inactive = $data['inactive'];
            }
            if (isset($data['isRevocable']) && $data['isRevocable'] !== null) {
                $instance->isRevocable = $data['isRevocable'];
            }
            if (isset($data['paypalAccountEmail']) && $data['paypalAccountEmail'] !== null) {
                $instance->paypalAccountEmail = $data['paypalAccountEmail'];
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
            if ($this->billingAddress !== null) {
                $data['billingAddress'] = $this->billingAddress->asArray();
            }
            if ($this->inactive !== null) {
                $data['inactive'] = $this->inactive;
            }
            if ($this->isRevocable !== null) {
                $data['isRevocable'] = $this->isRevocable;
            }
            if ($this->paypalAccountEmail !== null) {
                $data['paypalAccountEmail'] = $this->paypalAccountEmail;
            }
            return $data;
        }
}
