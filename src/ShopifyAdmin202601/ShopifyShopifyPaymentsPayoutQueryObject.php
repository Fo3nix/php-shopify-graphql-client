<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyPaymentsPayoutQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsPayout";

    /**
     * @deprecated Use `destinationAccount` instead.
     */
    public function selectBankAccount(ShopifyShopifyPaymentsPayoutBankAccountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsBankAccountQueryObject("bankAccount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBusinessEntity(ShopifyShopifyPaymentsPayoutBusinessEntityArgumentsObject $argsObject = null)
    {
        $object = new ShopifyBusinessEntityQueryObject("businessEntity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectExternalTraceId()
    {
        $this->selectField("externalTraceId");

        return $this;
    }

    /**
     * @deprecated Use `net` instead.
     */
    public function selectGross(ShopifyShopifyPaymentsPayoutGrossArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("gross");
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

    public function selectNet(ShopifyShopifyPaymentsPayoutNetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("net");
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

    public function selectSummary(ShopifyShopifyPaymentsPayoutSummaryArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsPayoutSummaryQueryObject("summary");
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
