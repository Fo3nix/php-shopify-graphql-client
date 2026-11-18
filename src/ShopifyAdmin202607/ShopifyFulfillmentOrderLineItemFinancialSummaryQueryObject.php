<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The financial details of a fulfillment order line item.
 */
class ShopifyFulfillmentOrderLineItemFinancialSummaryQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderLineItemFinancialSummary";

    /**
     * The approximate split price of a line item unit, in shop and presentment currencies. This value doesn't include discounts applied to the entire order.For the full picture of applied discounts, see discountAllocations.
     */
    public function selectApproximateDiscountedUnitPriceSet(?ShopifyFulfillmentOrderLineItemFinancialSummaryApproximateDiscountedUnitPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("approximateDiscountedUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The discounts that have been allocated onto the line item by discount applications, not including order edits and refunds.
     */
    public function selectDiscountAllocations(?ShopifyFulfillmentOrderLineItemFinancialSummaryDiscountAllocationsArgumentsObject $argsObject = null): ShopifyFinancialSummaryDiscountAllocationQueryObject
    {
        $object = new ShopifyFinancialSummaryDiscountAllocationQueryObject("discountAllocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The variant unit price without discounts applied, in shop and presentment currencies.
     */
    public function selectOriginalUnitPriceSet(?ShopifyFulfillmentOrderLineItemFinancialSummaryOriginalUnitPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("originalUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Number of line items that this financial summary applies to.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }
}
