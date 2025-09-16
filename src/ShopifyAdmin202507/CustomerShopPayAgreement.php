<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerCreditCardBillingAddress;

class CustomerShopPayAgreement
{
    protected $billingAddress;
    protected $expiresSoon;
    protected $expiryMonth;
    protected $expiryYear;
    protected $inactive;
    protected $isRevocable;
    protected $lastDigits;
    protected $maskedNumber;
    protected $name;

    
    /**
     * @return CustomerCreditCardBillingAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    
    /**
     * @return bool
     */
    public function getExpiresSoon()
    {
        return $this->expiresSoon;
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
    public function getLastDigits()
    {
        return $this->lastDigits;
    }

    
    /**
     * @return string
     */
    public function getMaskedNumber()
    {
        return $this->maskedNumber;
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
            if (isset($data['expiresSoon']) && $data['expiresSoon'] !== null) {
                $instance->expiresSoon = $data['expiresSoon'];
            }
            if (isset($data['expiryMonth']) && $data['expiryMonth'] !== null) {
                $instance->expiryMonth = $data['expiryMonth'];
            }
            if (isset($data['expiryYear']) && $data['expiryYear'] !== null) {
                $instance->expiryYear = $data['expiryYear'];
            }
            if (isset($data['inactive']) && $data['inactive'] !== null) {
                $instance->inactive = $data['inactive'];
            }
            if (isset($data['isRevocable']) && $data['isRevocable'] !== null) {
                $instance->isRevocable = $data['isRevocable'];
            }
            if (isset($data['lastDigits']) && $data['lastDigits'] !== null) {
                $instance->lastDigits = $data['lastDigits'];
            }
            if (isset($data['maskedNumber']) && $data['maskedNumber'] !== null) {
                $instance->maskedNumber = $data['maskedNumber'];
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
            if ($this->expiresSoon !== null) {
                $data['expiresSoon'] = $this->expiresSoon;
            }
            if ($this->expiryMonth !== null) {
                $data['expiryMonth'] = $this->expiryMonth;
            }
            if ($this->expiryYear !== null) {
                $data['expiryYear'] = $this->expiryYear;
            }
            if ($this->inactive !== null) {
                $data['inactive'] = $this->inactive;
            }
            if ($this->isRevocable !== null) {
                $data['isRevocable'] = $this->isRevocable;
            }
            if ($this->lastDigits !== null) {
                $data['lastDigits'] = $this->lastDigits;
            }
            if ($this->maskedNumber !== null) {
                $data['maskedNumber'] = $this->maskedNumber;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            return $data;
        }
}
