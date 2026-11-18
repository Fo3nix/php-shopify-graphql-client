<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCustomerPaymentInstrumentBillingAddress;

/**
 * Represents a bank account payment instrument.
 */
class ShopifyBankAccount
{
    protected $accountHolderType;
    protected $accountType;
    protected $bankName;
    protected $billingAddress;
    protected $lastDigits;

    
    /**
     * The type of account holder.
     *
     * @return string A ShopifyBankAccountHolderTypeEnumObject value
     */
    public function getAccountHolderType(): ?string
    {
        return $this->accountHolderType;
    }

    
    /**
     * The type of bank account.
     *
     * @return string A ShopifyBankAccountTypeEnumObject value
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
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
     * The billing address associated with the bank account.
     *
     * @return ShopifyCustomerPaymentInstrumentBillingAddress
     */
    public function getBillingAddress(): ?ShopifyCustomerPaymentInstrumentBillingAddress
    {
        return $this->billingAddress;
    }

    
    /**
     * The last four digits of the account number.
     *
     * @return string
     */
    public function getLastDigits(): ?string
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
