<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyTenderTransactionQueryObject extends QueryObject
{
    const OBJECT_NAME = "TenderTransaction";

    public function selectAmount(ShopifyTenderTransactionAmountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
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

    public function selectOrder(ShopifyTenderTransactionOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentMethod()
    {
        $this->selectField("paymentMethod");

        return $this;
    }

    public function selectProcessedAt()
    {
        $this->selectField("processedAt");

        return $this;
    }

    public function selectRemoteReference()
    {
        $this->selectField("remoteReference");

        return $this;
    }

    public function selectTest()
    {
        $this->selectField("test");

        return $this;
    }

    public function selectTransactionDetails(ShopifyTenderTransactionTransactionDetailsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTenderTransactionDetailsUnionObject("transactionDetails");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUser(ShopifyTenderTransactionUserArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStaffMemberQueryObject("user");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
