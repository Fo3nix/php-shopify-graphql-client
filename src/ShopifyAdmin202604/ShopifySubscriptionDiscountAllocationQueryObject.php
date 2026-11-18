<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents what a particular discount reduces from a line price.
 */
class ShopifySubscriptionDiscountAllocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDiscountAllocation";

    /**
     * Allocation amount.
     */
    public function selectAmount(?ShopifySubscriptionDiscountAllocationAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Discount that created the allocation.
     */
    public function selectDiscount(?ShopifySubscriptionDiscountAllocationDiscountArgumentsObject $argsObject = null): ShopifySubscriptionDiscountUnionObject
    {
        $object = new ShopifySubscriptionDiscountUnionObject("discount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
