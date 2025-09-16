<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionDiscountAllocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDiscountAllocation";

    public function selectAmount(SubscriptionDiscountAllocationAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscount(SubscriptionDiscountAllocationDiscountArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionDiscountUnionObject("discount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
