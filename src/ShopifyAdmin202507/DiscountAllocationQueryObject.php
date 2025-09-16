<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountAllocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAllocation";

    /**
     * @deprecated Use `allocatedAmountSet` instead.
     */
    public function selectAllocatedAmount(DiscountAllocationAllocatedAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("allocatedAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAllocatedAmountSet(DiscountAllocationAllocatedAmountSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("allocatedAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
