<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyPaymentsAdjustmentOrderQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsAdjustmentOrder";

    public function selectAmount(ShopifyShopifyPaymentsAdjustmentOrderAmountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFees(ShopifyShopifyPaymentsAdjustmentOrderFeesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("fees");
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

    public function selectNet(ShopifyShopifyPaymentsAdjustmentOrderNetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("net");
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
