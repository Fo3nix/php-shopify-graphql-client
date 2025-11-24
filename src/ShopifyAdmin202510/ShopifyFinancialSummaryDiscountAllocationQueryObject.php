<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFinancialSummaryDiscountAllocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "FinancialSummaryDiscountAllocation";

    public function selectApproximateAllocatedAmountPerItem(ShopifyFinancialSummaryDiscountAllocationApproximateAllocatedAmountPerItemArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("approximateAllocatedAmountPerItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountApplication(ShopifyFinancialSummaryDiscountAllocationDiscountApplicationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFinancialSummaryDiscountApplicationQueryObject("discountApplication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
