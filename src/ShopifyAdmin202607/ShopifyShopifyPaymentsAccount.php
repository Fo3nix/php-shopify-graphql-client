<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyPaymentsBalanceTransactionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyPaymentsBankAccountConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyPaymentsChargeStatementDescriptorHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyPaymentsChargeStatementDescriptor;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyPaymentsDisputeConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyPaymentsPayoutSchedule;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyPaymentsPayoutConnection;

/**
 * Financial account information for merchants using Shopify Payments. Tracks current balances across all supported currencies, payout schedules, and [`ShopifyPaymentsBalanceTransaction`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsBalanceTransaction) records.
 *
 * The account includes configuration details such as [`ShopifyPaymentsBankAccount`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsBankAccount) objects for receiving [`ShopifyPaymentsPayout`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsPayout) transfers, statement descriptors that appear on customer credit card statements, and the [`ShopifyPaymentsPayoutSchedule`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsPayoutSchedule) that determines when funds transfer to your bank. Access balance transactions to review individual charges, refunds, and adjustments that affect your account balance. Query payouts to track money movement between your Shopify Payments balance and bank accounts.
 */
class ShopifyShopifyPaymentsAccount implements ShopifyNode
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
     * The name of the account opener.
     *
     * @return string
     */
    public function getAccountOpenerName(): ?string
    {
        return $this->accountOpenerName;
    }

    
    /**
     * Whether the Shopify Payments setup is completed.
     *
     * @return bool
     */
    public function getActivated(): ?bool
    {
        return $this->activated;
    }

    
    /**
     * Current balances in all currencies for the account.
     *
     * @return ShopifyMoneyV2[]
     */
    public function getBalance(): ?array
    {
        return $this->balance;
    }

    
    /**
     * A list of balance transactions associated with the shop.
     *
     * @return ShopifyShopifyPaymentsBalanceTransactionConnection
     */
    public function getBalanceTransactions(): ?ShopifyShopifyPaymentsBalanceTransactionConnection
    {
        return $this->balanceTransactions;
    }

    
    /**
     * All bank accounts configured for the Shopify Payments account.
     *
     * @return ShopifyShopifyPaymentsBankAccountConnection
     */
    public function getBankAccounts(): ?ShopifyShopifyPaymentsBankAccountConnection
    {
        return $this->bankAccounts;
    }

    
    /**
     * The statement descriptor used for charges.
     *
     * The statement descriptor appears on a customer's credit card or bank statement when they make a purchase.
     *
     * @return string
     */
    public function getChargeStatementDescriptor(): ?string
    {
        return $this->chargeStatementDescriptor;
    }

    
    /**
     * The statement descriptors used for charges.
     *
     * These descriptors appear on a customer's credit card or bank statement when they make a purchase.
     *
     * @return ShopifyShopifyPaymentsChargeStatementDescriptor
     */
    public function getChargeStatementDescriptors(): ?ShopifyShopifyPaymentsChargeStatementDescriptor
    {
        return $this->chargeStatementDescriptors;
    }

    
    /**
     * The Shopify Payments account country.
     *
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    
    /**
     * The default payout currency for the Shopify Payments account.
     *
     * @return string A ShopifyCurrencyCodeEnumObject value
     */
    public function getDefaultCurrency(): ?string
    {
        return $this->defaultCurrency;
    }

    
    /**
     * All disputes that originated from a transaction made with the Shopify Payments account.
     *
     * @return ShopifyShopifyPaymentsDisputeConnection
     */
    public function getDisputes(): ?ShopifyShopifyPaymentsDisputeConnection
    {
        return $this->disputes;
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
     * Whether the Shopify Payments account can be onboarded.
     *
     * @return bool
     */
    public function getOnboardable(): ?bool
    {
        return $this->onboardable;
    }

    
    /**
     * The payout schedule for the account.
     *
     * @return ShopifyShopifyPaymentsPayoutSchedule
     */
    public function getPayoutSchedule(): ?ShopifyShopifyPaymentsPayoutSchedule
    {
        return $this->payoutSchedule;
    }

    
    /**
     * The descriptor used for payouts.
     *
     * The descriptor appears on a merchant's bank statement when they receive a payout.
     *
     * @return string
     */
    public function getPayoutStatementDescriptor(): ?string
    {
        return $this->payoutStatementDescriptor;
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
                $instance->balance = array_map(function($item) { return ShopifyMoneyV2::fromArray($item); }, $data['balance']);
            }
            if (isset($data['balanceTransactions']) && $data['balanceTransactions'] !== null) {
                $instance->balanceTransactions = ShopifyShopifyPaymentsBalanceTransactionConnection::fromArray($data['balanceTransactions']);
            }
            if (isset($data['bankAccounts']) && $data['bankAccounts'] !== null) {
                $instance->bankAccounts = ShopifyShopifyPaymentsBankAccountConnection::fromArray($data['bankAccounts']);
            }
            if (isset($data['chargeStatementDescriptor']) && $data['chargeStatementDescriptor'] !== null) {
                $instance->chargeStatementDescriptor = $data['chargeStatementDescriptor'];
            }
            if (isset($data['chargeStatementDescriptors']) && $data['chargeStatementDescriptors'] !== null) {
                $instance->chargeStatementDescriptors = ShopifyShopifyPaymentsChargeStatementDescriptorHydrator::fromArray($data['chargeStatementDescriptors']);
            }
            if (isset($data['country']) && $data['country'] !== null) {
                $instance->country = $data['country'];
            }
            if (isset($data['defaultCurrency']) && $data['defaultCurrency'] !== null) {
                $instance->defaultCurrency = $data['defaultCurrency'];
            }
            if (isset($data['disputes']) && $data['disputes'] !== null) {
                $instance->disputes = ShopifyShopifyPaymentsDisputeConnection::fromArray($data['disputes']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['onboardable']) && $data['onboardable'] !== null) {
                $instance->onboardable = $data['onboardable'];
            }
            if (isset($data['payoutSchedule']) && $data['payoutSchedule'] !== null) {
                $instance->payoutSchedule = ShopifyShopifyPaymentsPayoutSchedule::fromArray($data['payoutSchedule']);
            }
            if (isset($data['payoutStatementDescriptor']) && $data['payoutStatementDescriptor'] !== null) {
                $instance->payoutStatementDescriptor = $data['payoutStatementDescriptor'];
            }
            if (isset($data['payouts']) && $data['payouts'] !== null) {
                $instance->payouts = ShopifyShopifyPaymentsPayoutConnection::fromArray($data['payouts']);
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
                $data['chargeStatementDescriptors'] = ShopifyShopifyPaymentsChargeStatementDescriptorHydrator::toArray($this->chargeStatementDescriptors);
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
