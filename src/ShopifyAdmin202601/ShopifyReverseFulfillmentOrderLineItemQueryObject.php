<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The details about a reverse fulfillment order line item.
 */
class ShopifyReverseFulfillmentOrderLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseFulfillmentOrderLineItem";

    /**
     * The dispositions of the item.
     */
    public function selectDispositions(?ShopifyReverseFulfillmentOrderLineItemDispositionsArgumentsObject $argsObject = null): ShopifyReverseFulfillmentOrderDispositionQueryObject
    {
        $object = new ShopifyReverseFulfillmentOrderDispositionQueryObject("dispositions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The corresponding fulfillment line item for a reverse fulfillment order line item.
     */
    public function selectFulfillmentLineItem(?ShopifyReverseFulfillmentOrderLineItemFulfillmentLineItemArgumentsObject $argsObject = null): ShopifyFulfillmentLineItemQueryObject
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
     * The total number of units to be processed.
     */
    public function selectTotalQuantity(): static
    {
        $this->selectField("totalQuantity");

        return $this;
    }
}
