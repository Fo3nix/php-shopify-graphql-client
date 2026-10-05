<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFulfillmentOrderLineItemFinancialSummaryQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderLineItemFinancialSummary";

    public function selectApproximateDiscountedUnitPriceSet(ShopifyFulfillmentOrderLineItemFinancialSummaryApproximateDiscountedUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("approximateDiscountedUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountAllocations(ShopifyFulfillmentOrderLineItemFinancialSummaryDiscountAllocationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFinancialSummaryDiscountAllocationQueryObject("discountAllocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalUnitPriceSet(ShopifyFulfillmentOrderLineItemFinancialSummaryOriginalUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("originalUnitPriceSet");
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
