<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopifyPaymentsPayoutConnection;

class ShopifyPaymentsBankAccount
{
    protected $accountNumberLastDigits;
    protected $bankName;
    protected $country;
    protected $createdAt;
    protected $currency;
    protected $id;
    protected $payouts;
    protected $status;

    
    /**
     * @return string
     */
    public function getAccountNumberLastDigits()
    {
        return $this->accountNumberLastDigits;
    }

    
    /**
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    
    /**
     * @return CountryCodeEnumObject
     */
    public function getCountry()
    {
        return $this->country;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return CurrencyCodeEnumObject
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyPaymentsPayoutConnection
     */
    public function getPayouts()
    {
        return $this->payouts;
    }

    
    /**
     * @return ShopifyPaymentsBankAccountStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['accountNumberLastDigits']) && $data['accountNumberLastDigits'] !== null) {
                $instance->accountNumberLastDigits = $data['accountNumberLastDigits'];
            }
            if (isset($data['bankName']) && $data['bankName'] !== null) {
                $instance->bankName = $data['bankName'];
            }
            if (isset($data['country']) && $data['country'] !== null) {
                $instance->country = $data['country'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['currency']) && $data['currency'] !== null) {
                $instance->currency = $data['currency'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['payouts']) && $data['payouts'] !== null) {
                $instance->payouts = ShopifyPaymentsPayoutConnection::fromArray($data['payouts']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
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
            if ($this->accountNumberLastDigits !== null) {
                $data['accountNumberLastDigits'] = $this->accountNumberLastDigits;
            }
            if ($this->bankName !== null) {
                $data['bankName'] = $this->bankName;
            }
            if ($this->country !== null) {
                $data['country'] = $this->country;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->currency !== null) {
                $data['currency'] = $this->currency;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->payouts !== null) {
                $data['payouts'] = $this->payouts->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            return $data;
        }
}
