<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShopifyPaymentsPayoutConnection;

/**
 * A bank account that can receive payouts.
 */
class ShopifyShopifyPaymentsBankAccount implements ShopifyNode
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
     * The last digits of the account number (the rest is redacted).
     *
     * @return string
     */
    public function getAccountNumberLastDigits(): ?string
    {
        return $this->accountNumberLastDigits;
    }

    
    /**
     * The name of the bank.
     *
     * @return string
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    
    /**
     * The country of the bank.
     *
     * @return string A ShopifyCountryCodeEnumObject value
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    
    /**
     * The date that the bank account was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The currency of the bank account.
     *
     * @return string A ShopifyCurrencyCodeEnumObject value
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * All current and previous payouts made between the account and the bank account.
     *
     * @return ShopifyShopifyPaymentsPayoutConnection
     */
    public function getPayouts(): ?ShopifyShopifyPaymentsPayoutConnection
    {
        return $this->payouts;
    }

    
    /**
     * The status of the bank account.
     *
     * @return string A ShopifyShopifyPaymentsBankAccountStatusEnumObject value
     */
    public function getStatus(): ?string
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
                $instance->payouts = ShopifyShopifyPaymentsPayoutConnection::fromArray($data['payouts']);
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
