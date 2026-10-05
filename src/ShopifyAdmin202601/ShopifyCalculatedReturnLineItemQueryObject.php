<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCalculatedReturnLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedReturnLineItem";

    public function selectFulfillmentLineItem(ShopifyCalculatedReturnLineItemFulfillmentLineItemArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentLineItemQueryObject("fulfillmentLineItem");
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

    public function selectQuantity()
    {
        $this->selectField("quantity");

        return $this;
    }

    public function selectRestockingFee(ShopifyCalculatedReturnLineItemRestockingFeeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCalculatedRestockingFeeQueryObject("restockingFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubtotalBeforeOrderDiscountsSet(ShopifyCalculatedReturnLineItemSubtotalBeforeOrderDiscountsSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("subtotalBeforeOrderDiscountsSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubtotalSet(ShopifyCalculatedReturnLineItemSubtotalSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("subtotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalTaxSet(ShopifyCalculatedReturnLineItemTotalTaxSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalTaxSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
