<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopifyPaymentsBalanceTransactionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopifyPaymentsBankAccountConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopifyPaymentsDisputeConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopifyPaymentsPayoutSchedule;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopifyPaymentsPayoutConnection;

class ShopifyPaymentsAccount
{
    protected $accountOpenerName;
    protected $activated;
    protected $balance;
    protected $balanceTransactions;
    protected $bankAccounts;
    protected $chargeStatementDescriptor;
    protected $chargeStatementDescriptors;
    protected $country;
    protected $defaultCurrency;
    protected $disputes;
    protected $id;
    protected $onboardable;
    protected $payoutSchedule;
    protected $payoutStatementDescriptor;
    protected $payouts;

    
    /**
     * @return string
     */
    public function getAccountOpenerName()
    {
        return $this->accountOpenerName;
    }

    
    /**
     * @return bool
     */
    public function getActivated()
    {
        return $this->activated;
    }

    
    /**
     * @return MoneyV2[]
     */
    public function getBalance()
    {
        return $this->balance;
    }

    
    /**
     * @return ShopifyPaymentsBalanceTransactionConnection
     */
    public function getBalanceTransactions()
    {
        return $this->balanceTransactions;
    }

    
    /**
     * @return ShopifyPaymentsBankAccountConnection
     */
    public function getBankAccounts()
    {
        return $this->bankAccounts;
    }

    
    /**
     * @return string
     */
    public function getChargeStatementDescriptor()
    {
        return $this->chargeStatementDescriptor;
    }

    
    /**
     * @return mixed
     */
    public function getChargeStatementDescriptors()
    {
        return $this->chargeStatementDescriptors;
    }

    
    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    
    /**
     * @return CurrencyCodeEnumObject
     */
    public function getDefaultCurrency()
    {
        return $this->defaultCurrency;
    }

    
    /**
     * @return ShopifyPaymentsDisputeConnection
     */
    public function getDisputes()
    {
        return $this->disputes;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return bool
     */
    public function getOnboardable()
    {
        return $this->onboardable;
    }

    
    /**
     * @return ShopifyPaymentsPayoutSchedule
     */
    public function getPayoutSchedule()
    {
        return $this->payoutSchedule;
    }

    
    /**
     * @return string
     */
    public function getPayoutStatementDescriptor()
    {
        return $this->payoutStatementDescriptor;
    }

    
    /**
     * @return ShopifyPaymentsPayoutConnection
     */
    public function getPayouts()
    {
        return $this->payouts;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['accountOpenerName']) && $data['accountOpenerName'] !== null) {
                $instance->accountOpenerName = $data['accountOpenerName'];
            }
            if (isset($data['activated']) && $data['activated'] !== null) {
                $instance->activated = $data['activated'];
            }
            if (isset($data['balance']) && $data['balance'] !== null) {
                $instance->balance = array_map(function($item) { return MoneyV2::fromArray($item); }, $data['balance']);
            }
            if (isset($data['balanceTransactions']) && $data['balanceTransactions'] !== null) {
                $instance->balanceTransactions = ShopifyPaymentsBalanceTransactionConnection::fromArray($data['balanceTransactions']);
            }
            if (isset($data['bankAccounts']) && $data['bankAccounts'] !== null) {
                $instance->bankAccounts = ShopifyPaymentsBankAccountConnection::fromArray($data['bankAccounts']);
            }
            if (isset($data['chargeStatementDescriptor']) && $data['chargeStatementDescriptor'] !== null) {
                $instance->chargeStatementDescriptor = $data['chargeStatementDescriptor'];
            }
            if (isset($data['chargeStatementDescriptors']) && $data['chargeStatementDescriptors'] !== null) {
                $instance->chargeStatementDescriptors = $data['chargeStatementDescriptors'];
            }
            if (isset($data['country']) && $data['country'] !== null) {
                $instance->country = $data['country'];
            }
            if (isset($data['defaultCurrency']) && $data['defaultCurrency'] !== null) {
                $instance->defaultCurrency = $data['defaultCurrency'];
            }
            if (isset($data['disputes']) && $data['disputes'] !== null) {
                $instance->disputes = ShopifyPaymentsDisputeConnection::fromArray($data['disputes']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['onboardable']) && $data['onboardable'] !== null) {
                $instance->onboardable = $data['onboardable'];
            }
            if (isset($data['payoutSchedule']) && $data['payoutSchedule'] !== null) {
                $instance->payoutSchedule = ShopifyPaymentsPayoutSchedule::fromArray($data['payoutSchedule']);
            }
            if (isset($data['payoutStatementDescriptor']) && $data['payoutStatementDescriptor'] !== null) {
                $instance->payoutStatementDescriptor = $data['payoutStatementDescriptor'];
            }
            if (isset($data['payouts']) && $data['payouts'] !== null) {
                $instance->payouts = ShopifyPaymentsPayoutConnection::fromArray($data['payouts']);
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
            if ($this->accountOpenerName !== null) {
                $data['accountOpenerName'] = $this->accountOpenerName;
            }
            if ($this->activated !== null) {
                $data['activated'] = $this->activated;
            }
            if ($this->balance !== null) {
                $data['balance'] = array_map(function($item) { return $item->asArray(); }, $this->balance);
            }
            if ($this->balanceTransactions !== null) {
                $data['balanceTransactions'] = $this->balanceTransactions->asArray();
            }
            if ($this->bankAccounts !== null) {
                $data['bankAccounts'] = $this->bankAccounts->asArray();
            }
            if ($this->chargeStatementDescriptor !== null) {
                $data['chargeStatementDescriptor'] = $this->chargeStatementDescriptor;
            }
            if ($this->chargeStatementDescriptors !== null) {
                $data['chargeStatementDescriptors'] = $this->chargeStatementDescriptors;
            }
            if ($this->country !== null) {
                $data['country'] = $this->country;
            }
            if ($this->defaultCurrency !== null) {
                $data['defaultCurrency'] = $this->defaultCurrency;
            }
            if ($this->disputes !== null) {
                $data['disputes'] = $this->disputes->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->onboardable !== null) {
                $data['onboardable'] = $this->onboardable;
            }
            if ($this->payoutSchedule !== null) {
                $data['payoutSchedule'] = $this->payoutSchedule->asArray();
            }
            if ($this->payoutStatementDescriptor !== null) {
                $data['payoutStatementDescriptor'] = $this->payoutStatementDescriptor;
            }
            if ($this->payouts !== null) {
                $data['payouts'] = $this->payouts->asArray();
            }
            return $data;
        }
}
