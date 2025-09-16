<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FinancialSummaryDiscountAllocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "FinancialSummaryDiscountAllocation";

    public function selectApproximateAllocatedAmountPerItem(FinancialSummaryDiscountAllocationApproximateAllocatedAmountPerItemArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("approximateAllocatedAmountPerItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountApplication(FinancialSummaryDiscountAllocationDiscountApplicationArgumentsObject $argsObject = null)
    {
        $object = new FinancialSummaryDiscountApplicationQueryObject("discountApplication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
