<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFulfillmentLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentLineItem";

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * @deprecated Use `discountedTotalSet` instead.
     */
    public function selectDiscountedTotal()
    {
        $this->selectField("discountedTotal");

        return $this;
    }

    public function selectDiscountedTotalSet(ShopifyFulfillmentLineItemDiscountedTotalSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("discountedTotalSet");
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

    public function selectLineItem(ShopifyFulfillmentLineItemLineItemArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLineItemQueryObject("lineItem");
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

    public function selectOriginalTotalSet(ShopifyFulfillmentLineItemOriginalTotalSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("originalTotalSet");
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
