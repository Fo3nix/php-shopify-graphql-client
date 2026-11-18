<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Financial account information for merchants using Shopify Payments. Tracks current balances across all supported currencies, payout schedules, and [`ShopifyPaymentsBalanceTransaction`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsBalanceTransaction) records.
 *
 * The account includes configuration details such as [`ShopifyPaymentsBankAccount`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsBankAccount) objects for receiving [`ShopifyPaymentsPayout`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsPayout) transfers, statement descriptors that appear on customer credit card statements, and the [`ShopifyPaymentsPayoutSchedule`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsPayoutSchedule) that determines when funds transfer to your bank. Access balance transactions to review individual charges, refunds, and adjustments that affect your account balance. Query payouts to track money movement between your Shopify Payments balance and bank accounts.
 */
class ShopifyShopifyPaymentsAccountQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsAccount";

    /**
     * The name of the account opener.
     */
    public function selectAccountOpenerName(): static
    {
        $this->selectField("accountOpenerName");

        return $this;
    }

    /**
     * Whether the Shopify Payments setup is completed.
     */
    public function selectActivated(): static
    {
        $this->selectField("activated");

        return $this;
    }

    /**
     * Current balances in all currencies for the account.
     */
    public function selectBalance(?ShopifyShopifyPaymentsAccountBalanceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("balance");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of balance transactions associated with the shop.
     */
    public function selectBalanceTransactions(?ShopifyShopifyPaymentsAccountBalanceTransactionsArgumentsObject $argsObject = null): ShopifyShopifyPaymentsBalanceTransactionConnectionQueryObject
    {
        $object = new ShopifyShopifyPaymentsBalanceTransactionConnectionQueryObject("balanceTransactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * All bank accounts configured for the Shopify Payments account.
     */
    public function selectBankAccounts(?ShopifyShopifyPaymentsAccountBankAccountsArgumentsObject $argsObject = null): ShopifyShopifyPaymentsBankAccountConnectionQueryObject
    {
        $object = new ShopifyShopifyPaymentsBankAccountConnectionQueryObject("bankAccounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The statement descriptor used for charges.
     *
     * The statement descriptor appears on a customer's credit card or bank statement when they make a purchase.
     *
     * @deprecated Use `chargeStatementDescriptors` instead.
     */
    public function selectChargeStatementDescriptor(): static
    {
        $this->selectField("chargeStatementDescriptor");

        return $this;
    }

    /**
     * The statement descriptors used for charges.
     *
     * These descriptors appear on a customer's credit card or bank statement when they make a purchase.
     */
    public function selectChargeStatementDescriptors(?ShopifyShopifyPaymentsAccountChargeStatementDescriptorsArgumentsObject $argsObject = null): ShopifyShopifyPaymentsChargeStatementDescriptorInterfaceObject
    {
        $object = new ShopifyShopifyPaymentsChargeStatementDescriptorInterfaceObject("chargeStatementDescriptors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The Shopify Payments account country.
     */
    public function selectCountry(): static
    {
        $this->selectField("country");

        return $this;
    }

    /**
     * The default payout currency for the Shopify Payments account.
     */
    public function selectDefaultCurrency(): static
    {
        $this->selectField("defaultCurrency");

        return $this;
    }

    /**
     * All disputes that originated from a transaction made with the Shopify Payments account.
     */
    public function selectDisputes(?ShopifyShopifyPaymentsAccountDisputesArgumentsObject $argsObject = null): ShopifyShopifyPaymentsDisputeConnectionQueryObject
    {
        $object = new ShopifyShopifyPaymentsDisputeConnectionQueryObject("disputes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * Whether the Shopify Payments account can be onboarded.
     */
    public function selectOnboardable(): static
    {
        $this->selectField("onboardable");

        return $this;
    }

    /**
     * The payout schedule for the account.
     */
    public function selectPayoutSchedule(?ShopifyShopifyPaymentsAccountPayoutScheduleArgumentsObject $argsObject = null): ShopifyShopifyPaymentsPayoutScheduleQueryObject
    {
        $object = new ShopifyShopifyPaymentsPayoutScheduleQueryObject("payoutSchedule");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The descriptor used for payouts.
     *
     * The descriptor appears on a merchant's bank statement when they receive a payout.
     */
    public function selectPayoutStatementDescriptor(): static
    {
        $this->selectField("payoutStatementDescriptor");

        return $this;
    }

    /**
     * All current and previous payouts made between the account and the bank account.
     */
    public function selectPayouts(?ShopifyShopifyPaymentsAccountPayoutsArgumentsObject $argsObject = null): ShopifyShopifyPaymentsPayoutConnectionQueryObject
    {
        $object = new ShopifyShopifyPaymentsPayoutConnectionQueryObject("payouts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
