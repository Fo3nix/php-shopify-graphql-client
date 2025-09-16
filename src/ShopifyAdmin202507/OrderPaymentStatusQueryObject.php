<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OrderPaymentStatusQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderPaymentStatus";

    public function selectErrorMessage()
    {
        $this->selectField("errorMessage");

        return $this;
    }

    public function selectPaymentReferenceId()
    {
        $this->selectField("paymentReferenceId");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectTransactions(OrderPaymentStatusTransactionsArgumentsObject $argsObject = null)
    {
        $object = new OrderTransactionQueryObject("transactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTranslatedErrorMessage()
    {
        $this->selectField("translatedErrorMessage");

        return $this;
    }
}
