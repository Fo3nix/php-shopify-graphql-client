<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An amount that's allocated to a line item based on an associated discount application.
 */
class ShopifyFinancialSummaryDiscountAllocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "FinancialSummaryDiscountAllocation";

    /**
     * The money amount that's allocated per unit on the associated line based on the discount application in shop and presentment currencies. If the allocated amount for the line cannot be evenly divided by the quantity, then this amount will be an approximate amount, avoiding fractional pennies. For example, if the associated line had a quantity of 3 with a discount of 4 cents, then the discount distribution would be [0.01, 0.01, 0.02]. This field returns the highest number of the distribution. In this example, this would be 0.02.
     */
    public function selectApproximateAllocatedAmountPerItem(?ShopifyFinancialSummaryDiscountAllocationApproximateAllocatedAmountPerItemArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("approximateAllocatedAmountPerItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The discount application that the allocated amount originated from.
     */
    public function selectDiscountApplication(?ShopifyFinancialSummaryDiscountAllocationDiscountApplicationArgumentsObject $argsObject = null): ShopifyFinancialSummaryDiscountApplicationQueryObject
    {
        $object = new ShopifyFinancialSummaryDiscountApplicationQueryObject("discountApplication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
