<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerCreditCardBillingAddress;

class VaultCreditCard
{
    protected $billingAddress;
    protected $brand;
    protected $expired;
    protected $expiryMonth;
    protected $expiryYear;
    protected $lastDigits;
    protected $name;

    
    /**
     * @return CustomerCreditCardBillingAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    
    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    
    /**
     * @return bool
     */
    public function getExpired()
    {
        return $this->expired;
    }

    
    /**
     * @return int
     */
    public function getExpiryMonth()
    {
        return $this->expiryMonth;
    }

    
    /**
     * @return int
     */
    public function getExpiryYear()
    {
        return $this->expiryYear;
    }

    
    /**
     * @return string
     */
    public function getLastDigits()
    {
        return $this->lastDigits;
    }

    
    /**
     * @return string
     */
    public function getName()
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
            if (isset($data['billingAddress']) && $data['billingAddress'] !== null) {
                $instance->billingAddress = CustomerCreditCardBillingAddress::fromArray($data['billingAddress']);
            }
            if (isset($data['brand']) && $data['brand'] !== null) {
                $instance->brand = $data['brand'];
            }
            if (isset($data['expired']) && $data['expired'] !== null) {
                $instance->expired = $data['expired'];
            }
            if (isset($data['expiryMonth']) && $data['expiryMonth'] !== null) {
                $instance->expiryMonth = $data['expiryMonth'];
            }
            if (isset($data['expiryYear']) && $data['expiryYear'] !== null) {
                $instance->expiryYear = $data['expiryYear'];
            }
            if (isset($data['lastDigits']) && $data['lastDigits'] !== null) {
                $instance->lastDigits = $data['lastDigits'];
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
            if ($this->billingAddress !== null) {
                $data['billingAddress'] = $this->billingAddress->asArray();
            }
            if ($this->brand !== null) {
                $data['brand'] = $this->brand;
            }
            if ($this->expired !== null) {
                $data['expired'] = $this->expired;
            }
            if ($this->expiryMonth !== null) {
                $data['expiryMonth'] = $this->expiryMonth;
            }
            if ($this->expiryYear !== null) {
                $data['expiryYear'] = $this->expiryYear;
            }
            if ($this->lastDigits !== null) {
                $data['lastDigits'] = $this->lastDigits;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            return $data;
        }
}
