<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCalculatedExchangeLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedExchangeLineItem";

    public function selectCalculatedDiscountAllocations(ShopifyCalculatedExchangeLineItemCalculatedDiscountAllocationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCalculatedDiscountAllocationQueryObject("calculatedDiscountAllocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountedUnitPriceSet(ShopifyCalculatedExchangeLineItemDiscountedUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("discountedUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectOriginalUnitPriceSet(ShopifyCalculatedExchangeLineItemOriginalUnitPriceSetArgumentsObject $argsObject = null)
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

    public function selectSubtotalSet(ShopifyCalculatedExchangeLineItemSubtotalSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("subtotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalTaxSet(ShopifyCalculatedExchangeLineItemTotalTaxSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalTaxSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVariant(ShopifyCalculatedExchangeLineItemVariantArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantQueryObject("variant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
