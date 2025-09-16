<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentLineItem";

    /**
     * @deprecated Use `discountedTotalSet` instead.
     */
    public function selectDiscountedTotal()
    {
        $this->selectField("discountedTotal");

        return $this;
    }

    public function selectDiscountedTotalSet(FulfillmentLineItemDiscountedTotalSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("discountedTotalSet");
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

    public function selectLineItem(FulfillmentLineItemLineItemArgumentsObject $argsObject = null)
    {
        $object = new LineItemQueryObject("lineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `originalTotalSet` instead.
     */
    public function selectOriginalTotal()
    {
        $this->selectField("originalTotal");

        return $this;
    }

    public function selectOriginalTotalSet(FulfillmentLineItemOriginalTotalSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("originalTotalSet");
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
