<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A calculated return line item.
 */
class ShopifyCalculatedReturnLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedReturnLineItem";

    /**
     * The fulfillment line item from which items are returned.
     */
    public function selectFulfillmentLineItem(?ShopifyCalculatedReturnLineItemFulfillmentLineItemArgumentsObject $argsObject = null): ShopifyFulfillmentLineItemQueryObject
    {
        $object = new ShopifyFulfillmentLineItemQueryObject("fulfillmentLineItem");
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
     * The quantity being returned.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * The restocking fee of the return line item.
     */
    public function selectRestockingFee(?ShopifyCalculatedReturnLineItemRestockingFeeArgumentsObject $argsObject = null): ShopifyCalculatedRestockingFeeQueryObject
    {
        $object = new ShopifyCalculatedRestockingFeeQueryObject("restockingFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The subtotal of the return line item before order discounts.
     */
    public function selectSubtotalBeforeOrderDiscountsSet(?ShopifyCalculatedReturnLineItemSubtotalBeforeOrderDiscountsSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("subtotalBeforeOrderDiscountsSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The subtotal of the return line item.
     */
    public function selectSubtotalSet(?ShopifyCalculatedReturnLineItemSubtotalSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("subtotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total tax of the return line item.
     */
    public function selectTotalTaxSet(?ShopifyCalculatedReturnLineItemTotalTaxSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalTaxSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
