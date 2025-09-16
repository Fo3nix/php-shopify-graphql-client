<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerCreditCardBillingAddress;

class CustomerCreditCard
{
    protected $billingAddress;
    protected $brand;
    protected $expiresSoon;
    protected $expiryMonth;
    protected $expiryYear;
    protected $firstDigits;
    protected $isRevocable;
    protected $lastDigits;
    protected $maskedNumber;
    protected $name;
    protected $source;
    protected $virtualLastDigits;

    
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
     * @return string
     */
    public function getFirstDigits()
    {
        return $this->firstDigits;
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
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    
    /**
     * @return string
     */
    public function getVirtualLastDigits()
    {
        return $this->virtualLastDigits;
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
            if (isset($data['expiresSoon']) && $data['expiresSoon'] !== null) {
                $instance->expiresSoon = $data['expiresSoon'];
            }
            if (isset($data['expiryMonth']) && $data['expiryMonth'] !== null) {
                $instance->expiryMonth = $data['expiryMonth'];
            }
            if (isset($data['expiryYear']) && $data['expiryYear'] !== null) {
                $instance->expiryYear = $data['expiryYear'];
            }
            if (isset($data['firstDigits']) && $data['firstDigits'] !== null) {
                $instance->firstDigits = $data['firstDigits'];
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
            if (isset($data['source']) && $data['source'] !== null) {
                $instance->source = $data['source'];
            }
            if (isset($data['virtualLastDigits']) && $data['virtualLastDigits'] !== null) {
                $instance->virtualLastDigits = $data['virtualLastDigits'];
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
            if ($this->expiresSoon !== null) {
                $data['expiresSoon'] = $this->expiresSoon;
            }
            if ($this->expiryMonth !== null) {
                $data['expiryMonth'] = $this->expiryMonth;
            }
            if ($this->expiryYear !== null) {
                $data['expiryYear'] = $this->expiryYear;
            }
            if ($this->firstDigits !== null) {
                $data['firstDigits'] = $this->firstDigits;
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
            if ($this->source !== null) {
                $data['source'] = $this->source;
            }
            if ($this->virtualLastDigits !== null) {
                $data['virtualLastDigits'] = $this->virtualLastDigits;
            }
            return $data;
        }
}
