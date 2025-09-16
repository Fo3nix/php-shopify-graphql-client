<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class TenderTransactionQueryObject extends QueryObject
{
    const OBJECT_NAME = "TenderTransaction";

    public function selectAmount(TenderTransactionAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("amount");
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

    public function selectOrder(TenderTransactionOrderArgumentsObject $argsObject = null)
    {
        $object = new OrderQueryObject("order");
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

    public function selectTransactionDetails(TenderTransactionTransactionDetailsArgumentsObject $argsObject = null)
    {
        $object = new TenderTransactionDetailsUnionObject("transactionDetails");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUser(TenderTransactionUserArgumentsObject $argsObject = null)
    {
        $object = new StaffMemberQueryObject("user");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
