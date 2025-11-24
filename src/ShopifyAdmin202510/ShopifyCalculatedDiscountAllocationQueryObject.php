<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCalculatedDiscountAllocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedDiscountAllocation";

    public function selectAllocatedAmountSet(ShopifyCalculatedDiscountAllocationAllocatedAmountSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("allocatedAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
