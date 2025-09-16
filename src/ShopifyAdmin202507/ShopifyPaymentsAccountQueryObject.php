<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentsAccountQueryObject extends QueryObject
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

    public function selectBalance(ShopifyPaymentsAccountBalanceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("balance");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBalanceTransactions(ShopifyPaymentsAccountBalanceTransactionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsBalanceTransactionConnectionQueryObject("balanceTransactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBankAccounts(ShopifyPaymentsAccountBankAccountsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsBankAccountConnectionQueryObject("bankAccounts");
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

    public function selectDisputes(ShopifyPaymentsAccountDisputesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsDisputeConnectionQueryObject("disputes");
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

    public function selectPayoutSchedule(ShopifyPaymentsAccountPayoutScheduleArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsPayoutScheduleQueryObject("payoutSchedule");
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

    public function selectPayouts(ShopifyPaymentsAccountPayoutsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsPayoutConnectionQueryObject("payouts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
