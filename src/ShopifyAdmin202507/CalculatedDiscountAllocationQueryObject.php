<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CalculatedDiscountAllocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedDiscountAllocation";

    public function selectAllocatedAmountSet(CalculatedDiscountAllocationAllocatedAmountSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("allocatedAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
