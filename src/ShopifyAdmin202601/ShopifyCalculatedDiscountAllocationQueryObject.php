<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An amount discounting the line that has been allocated by an associated discount application.
 */
class ShopifyCalculatedDiscountAllocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedDiscountAllocation";

    /**
     * The money amount that's allocated by the discount application in shop and presentment currencies.
     */
    public function selectAllocatedAmountSet(?ShopifyCalculatedDiscountAllocationAllocatedAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("allocatedAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The discount that the allocated amount originated from.
     */
    public function selectDiscountApplication(?ShopifyCalculatedDiscountAllocationDiscountApplicationArgumentsObject $argsObject = null): ShopifyCalculatedDiscountApplicationInterfaceObject
    {
        $object = new ShopifyCalculatedDiscountApplicationInterfaceObject("discountApplication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
