<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRefundLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "RefundLineItem";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLineItem(ShopifyRefundLineItemLineItemArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLineItemQueryObject("lineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocation(ShopifyRefundLineItemLocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `priceSet` instead.
     */
    public function selectPrice()
    {
        $this->selectField("price");

        return $this;
    }

    public function selectPriceSet(ShopifyRefundLineItemPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("priceSet");
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

    public function selectRestockType()
    {
        $this->selectField("restockType");

        return $this;
    }

    public function selectRestocked()
    {
        $this->selectField("restocked");

        return $this;
    }

    /**
     * @deprecated Use `subtotalSet` instead.
     */
    public function selectSubtotal()
    {
        $this->selectField("subtotal");

        return $this;
    }

    public function selectSubtotalSet(ShopifyRefundLineItemSubtotalSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("subtotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `totalTaxSet` instead.
     */
    public function selectTotalTax()
    {
        $this->selectField("totalTax");

        return $this;
    }

    public function selectTotalTaxSet(ShopifyRefundLineItemTotalTaxSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalTaxSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
