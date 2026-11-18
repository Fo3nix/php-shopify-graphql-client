<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A calculated exchange line item.
 */
class ShopifyCalculatedExchangeLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedExchangeLineItem";

    /**
     * The discounts that have been allocated onto the line item by discount applications.
     */
    public function selectCalculatedDiscountAllocations(?ShopifyCalculatedExchangeLineItemCalculatedDiscountAllocationsArgumentsObject $argsObject = null): ShopifyCalculatedDiscountAllocationQueryObject
    {
        $object = new ShopifyCalculatedDiscountAllocationQueryObject("calculatedDiscountAllocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The unit price of the exchange line item after discounts.
     */
    public function selectDiscountedUnitPriceSet(?ShopifyCalculatedExchangeLineItemDiscountedUnitPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("discountedUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The original unit price of the exchange line item before discounts.
     */
    public function selectOriginalUnitPriceSet(?ShopifyCalculatedExchangeLineItemOriginalUnitPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("originalUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The quantity being exchanged.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * The calculated subtotal set of the exchange line item, including discounts.
     */
    public function selectSubtotalSet(?ShopifyCalculatedExchangeLineItemSubtotalSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("subtotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total tax of the exchange line item.
     */
    public function selectTotalTaxSet(?ShopifyCalculatedExchangeLineItemTotalTaxSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalTaxSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The variant being exchanged.
     */
    public function selectVariant(?ShopifyCalculatedExchangeLineItemVariantArgumentsObject $argsObject = null): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject("variant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
