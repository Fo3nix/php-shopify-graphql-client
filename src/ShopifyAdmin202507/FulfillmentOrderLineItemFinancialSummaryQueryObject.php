<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentOrderLineItemFinancialSummaryQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderLineItemFinancialSummary";

    public function selectApproximateDiscountedUnitPriceSet(FulfillmentOrderLineItemFinancialSummaryApproximateDiscountedUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("approximateDiscountedUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountAllocations(FulfillmentOrderLineItemFinancialSummaryDiscountAllocationsArgumentsObject $argsObject = null)
    {
        $object = new FinancialSummaryDiscountAllocationQueryObject("discountAllocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalUnitPriceSet(FulfillmentOrderLineItemFinancialSummaryOriginalUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("originalUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectQuantity()
    {
        $this->selectField("quantity");

        return $this;
    }
}
