<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyPaymentsAccountQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsAccount";

    public function selectAccountOpenerName()
    {
        $this->selectField("accountOpenerName");

        return $this;
    }

    public function selectActivated()
    {
        $this->selectField("activated");

        return $this;
    }

    public function selectBalance(ShopifyShopifyPaymentsAccountBalanceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("balance");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBalanceTransactions(ShopifyShopifyPaymentsAccountBalanceTransactionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsBalanceTransactionConnectionQueryObject("balanceTransactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBankAccounts(ShopifyShopifyPaymentsAccountBankAccountsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsBankAccountConnectionQueryObject("bankAccounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `chargeStatementDescriptors` instead.
     */
    public function selectChargeStatementDescriptor()
    {
        $this->selectField("chargeStatementDescriptor");

        return $this;
    }

    public function selectCountry()
    {
        $this->selectField("country");

        return $this;
    }

    public function selectDefaultCurrency()
    {
        $this->selectField("defaultCurrency");

        return $this;
    }

    public function selectDisputes(ShopifyShopifyPaymentsAccountDisputesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsDisputeConnectionQueryObject("disputes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectOnboardable()
    {
        $this->selectField("onboardable");

        return $this;
    }

    public function selectPayoutSchedule(ShopifyShopifyPaymentsAccountPayoutScheduleArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsPayoutScheduleQueryObject("payoutSchedule");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPayoutStatementDescriptor()
    {
        $this->selectField("payoutStatementDescriptor");

        return $this;
    }

    public function selectPayouts(ShopifyShopifyPaymentsAccountPayoutsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsPayoutConnectionQueryObject("payouts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
