<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentsAdjustmentOrderQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsAdjustmentOrder";

    public function selectAmount(ShopifyPaymentsAdjustmentOrderAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFees(ShopifyPaymentsAdjustmentOrderFeesArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("fees");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLink()
    {
        $this->selectField("link");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectNet(ShopifyPaymentsAdjustmentOrderNetArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("net");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrderTransactionId()
    {
        $this->selectField("orderTransactionId");

        return $this;
    }
}
