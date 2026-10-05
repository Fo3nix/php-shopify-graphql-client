<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionDiscountFixedAmountValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDiscountFixedAmountValue";

    public function selectAmount(ShopifySubscriptionDiscountFixedAmountValueAmountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAppliesOnEachItem()
    {
        $this->selectField("appliesOnEachItem");

        return $this;
    }
}
