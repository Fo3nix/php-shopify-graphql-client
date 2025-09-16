<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class CardPaymentDetails
{
    protected $avsResultCode;
    protected $bin;
    protected $company;
    protected $cvvResultCode;
    protected $expirationMonth;
    protected $expirationYear;
    protected $name;
    protected $number;
    protected $paymentMethodName;
    protected $wallet;

    
    /**
     * @return string
     */
    public function getAvsResultCode()
    {
        return $this->avsResultCode;
    }

    
    /**
     * @return string
     */
    public function getBin()
    {
        return $this->bin;
    }

    
    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    
    /**
     * @return string
     */
    public function getCvvResultCode()
    {
        return $this->cvvResultCode;
    }

    
    /**
     * @return int
     */
    public function getExpirationMonth()
    {
        return $this->expirationMonth;
    }

    
    /**
     * @return int
     */
    public function getExpirationYear()
    {
        return $this->expirationYear;
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
    public function getNumber()
    {
        return $this->number;
    }

    
    /**
     * @return string
     */
    public function getPaymentMethodName()
    {
        return $this->paymentMethodName;
    }

    
    /**
     * @return DigitalWalletEnumObject
     */
    public function getWallet()
    {
        return $this->wallet;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['avsResultCode']) && $data['avsResultCode'] !== null) {
                $instance->avsResultCode = $data['avsResultCode'];
            }
            if (isset($data['bin']) && $data['bin'] !== null) {
                $instance->bin = $data['bin'];
            }
            if (isset($data['company']) && $data['company'] !== null) {
                $instance->company = $data['company'];
            }
            if (isset($data['cvvResultCode']) && $data['cvvResultCode'] !== null) {
                $instance->cvvResultCode = $data['cvvResultCode'];
            }
            if (isset($data['expirationMonth']) && $data['expirationMonth'] !== null) {
                $instance->expirationMonth = $data['expirationMonth'];
            }
            if (isset($data['expirationYear']) && $data['expirationYear'] !== null) {
                $instance->expirationYear = $data['expirationYear'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['number']) && $data['number'] !== null) {
                $instance->number = $data['number'];
            }
            if (isset($data['paymentMethodName']) && $data['paymentMethodName'] !== null) {
                $instance->paymentMethodName = $data['paymentMethodName'];
            }
            if (isset($data['wallet']) && $data['wallet'] !== null) {
                $instance->wallet = $data['wallet'];
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
            if ($this->avsResultCode !== null) {
                $data['avsResultCode'] = $this->avsResultCode;
            }
            if ($this->bin !== null) {
                $data['bin'] = $this->bin;
            }
            if ($this->company !== null) {
                $data['company'] = $this->company;
            }
            if ($this->cvvResultCode !== null) {
                $data['cvvResultCode'] = $this->cvvResultCode;
            }
            if ($this->expirationMonth !== null) {
                $data['expirationMonth'] = $this->expirationMonth;
            }
            if ($this->expirationYear !== null) {
                $data['expirationYear'] = $this->expirationYear;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->number !== null) {
                $data['number'] = $this->number;
            }
            if ($this->paymentMethodName !== null) {
                $data['paymentMethodName'] = $this->paymentMethodName;
            }
            if ($this->wallet !== null) {
                $data['wallet'] = $this->wallet;
            }
            return $data;
        }
}
