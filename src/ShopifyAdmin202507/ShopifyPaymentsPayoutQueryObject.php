<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentsPayoutQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsPayout";

    /**
     * @deprecated Use `destinationAccount` instead.
     */
    public function selectBankAccount(ShopifyPaymentsPayoutBankAccountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsBankAccountQueryObject("bankAccount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBusinessEntity(ShopifyPaymentsPayoutBusinessEntityArgumentsObject $argsObject = null)
    {
        $object = new BusinessEntityQueryObject("businessEntity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `net` instead.
     */
    public function selectGross(ShopifyPaymentsPayoutGrossArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("gross");
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

    public function selectIssuedAt()
    {
        $this->selectField("issuedAt");

        return $this;
    }

    public function selectLegacyResourceId()
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    public function selectNet(ShopifyPaymentsPayoutNetArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("net");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectSummary(ShopifyPaymentsPayoutSummaryArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsPayoutSummaryQueryObject("summary");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTransactionType()
    {
        $this->selectField("transactionType");

        return $this;
    }
}
