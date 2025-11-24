<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOrderPaymentStatusQueryObject extends QueryObject
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

    public function selectTransactions(ShopifyOrderPaymentStatusTransactionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderTransactionQueryObject("transactions");
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
