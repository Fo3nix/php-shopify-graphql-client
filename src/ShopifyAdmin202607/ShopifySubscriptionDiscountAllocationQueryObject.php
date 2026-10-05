<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionDiscountAllocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDiscountAllocation";

    public function selectAmount(ShopifySubscriptionDiscountAllocationAmountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscount(ShopifySubscriptionDiscountAllocationDiscountArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionDiscountUnionObject("discount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
