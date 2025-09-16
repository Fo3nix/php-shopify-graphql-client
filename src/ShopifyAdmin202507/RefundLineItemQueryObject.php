<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class RefundLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "RefundLineItem";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLineItem(RefundLineItemLineItemArgumentsObject $argsObject = null)
    {
        $object = new LineItemQueryObject("lineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocation(RefundLineItemLocationArgumentsObject $argsObject = null)
    {
        $object = new LocationQueryObject("location");
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

    public function selectPriceSet(RefundLineItemPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("priceSet");
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

    public function selectSubtotalSet(RefundLineItemSubtotalSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("subtotalSet");
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

    public function selectTotalTaxSet(RefundLineItemTotalTaxSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalTaxSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
