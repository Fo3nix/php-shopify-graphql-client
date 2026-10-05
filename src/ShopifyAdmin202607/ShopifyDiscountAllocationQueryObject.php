<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountAllocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAllocation";

    /**
     * @deprecated Use `allocatedAmountSet` instead.
     */
    public function selectAllocatedAmount(ShopifyDiscountAllocationAllocatedAmountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("allocatedAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAllocatedAmountSet(ShopifyDiscountAllocationAllocatedAmountSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("allocatedAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
