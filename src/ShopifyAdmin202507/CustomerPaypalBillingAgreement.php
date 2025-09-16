<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerPaymentInstrumentBillingAddress;

class CustomerPaypalBillingAgreement
{
    protected $billingAddress;
    protected $inactive;
    protected $isRevocable;
    protected $paypalAccountEmail;

    
    /**
     * @return CustomerPaymentInstrumentBillingAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    
    /**
     * @return bool
     */
    public function getInactive()
    {
        return $this->inactive;
    }

    
    /**
     * @return bool
     */
    public function getIsRevocable()
    {
        return $this->isRevocable;
    }

    
    /**
     * @return string
     */
    public function getPaypalAccountEmail()
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
                $instance->billingAddress = CustomerPaymentInstrumentBillingAddress::fromArray($data['billingAddress']);
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
