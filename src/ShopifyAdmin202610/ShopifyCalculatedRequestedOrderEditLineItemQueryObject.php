<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The line item being processed for a requested order edit and its calculated monetary values.
 */
class ShopifyCalculatedRequestedOrderEditLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedRequestedOrderEditLineItem";

    /**
     * The line item being processed for a requested order edit.
     */
    public function selectLineItem(?ShopifyCalculatedRequestedOrderEditLineItemLineItemArgumentsObject $argsObject = null): ShopifyLineItemQueryObject
    {
        $object = new ShopifyLineItemQueryObject("lineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The quantity being edited.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * The subtotal of the edit line item.
     */
    public function selectSubtotalSet(?ShopifyCalculatedRequestedOrderEditLineItemSubtotalSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("subtotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total tax of the edit line item.
     */
    public function selectTotalTaxSet(?ShopifyCalculatedRequestedOrderEditLineItemTotalTaxSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalTaxSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
