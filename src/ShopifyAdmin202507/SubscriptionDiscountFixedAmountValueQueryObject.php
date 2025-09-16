<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionDiscountFixedAmountValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDiscountFixedAmountValue";

    public function selectAmount(SubscriptionDiscountFixedAmountValueAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("amount");
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
