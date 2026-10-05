<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCustomerPaymentInstrumentBillingAddress;

class ShopifyBankAccount
{
    protected $accountHolderType;
    protected $accountType;
    protected $bankName;
    protected $billingAddress;
    protected $lastDigits;

    
    /**
     * @return ShopifyBankAccountHolderTypeEnumObject
     */
    public function getAccountHolderType()
    {
        return $this->accountHolderType;
    }

    
    /**
     * @return ShopifyBankAccountTypeEnumObject
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    
    /**
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    
    /**
     * @return ShopifyCustomerPaymentInstrumentBillingAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    
    /**
     * @return string
     */
    public function getLastDigits()
    {
        return $this->lastDigits;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['accountHolderType']) && $data['accountHolderType'] !== null) {
                $instance->accountHolderType = $data['accountHolderType'];
            }
            if (isset($data['accountType']) && $data['accountType'] !== null) {
                $instance->accountType = $data['accountType'];
            }
            if (isset($data['bankName']) && $data['bankName'] !== null) {
                $instance->bankName = $data['bankName'];
            }
            if (isset($data['billingAddress']) && $data['billingAddress'] !== null) {
                $instance->billingAddress = ShopifyCustomerPaymentInstrumentBillingAddress::fromArray($data['billingAddress']);
            }
            if (isset($data['lastDigits']) && $data['lastDigits'] !== null) {
                $instance->lastDigits = $data['lastDigits'];
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
            if ($this->accountHolderType !== null) {
                $data['accountHolderType'] = $this->accountHolderType;
            }
            if ($this->accountType !== null) {
                $data['accountType'] = $this->accountType;
            }
            if ($this->bankName !== null) {
                $data['bankName'] = $this->bankName;
            }
            if ($this->billingAddress !== null) {
                $data['billingAddress'] = $this->billingAddress->asArray();
            }
            if ($this->lastDigits !== null) {
                $data['lastDigits'] = $this->lastDigits;
            }
            return $data;
        }
}
