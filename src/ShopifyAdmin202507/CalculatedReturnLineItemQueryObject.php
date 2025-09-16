<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CalculatedReturnLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedReturnLineItem";

    public function selectFulfillmentLineItem(CalculatedReturnLineItemFulfillmentLineItemArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentLineItemQueryObject("fulfillmentLineItem");
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

    public function selectRestockingFee(CalculatedReturnLineItemRestockingFeeArgumentsObject $argsObject = null)
    {
        $object = new CalculatedRestockingFeeQueryObject("restockingFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubtotalBeforeOrderDiscountsSet(CalculatedReturnLineItemSubtotalBeforeOrderDiscountsSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("subtotalBeforeOrderDiscountsSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubtotalSet(CalculatedReturnLineItemSubtotalSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("subtotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalTaxSet(CalculatedReturnLineItemTotalTaxSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalTaxSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
