<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The details about a reverse delivery line item.
 */
class ShopifyReverseDeliveryLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDeliveryLineItem";

    /**
     * The dispositions of the item.
     */
    public function selectDispositions(?ShopifyReverseDeliveryLineItemDispositionsArgumentsObject $argsObject = null): ShopifyReverseFulfillmentOrderDispositionQueryObject
    {
        $object = new ShopifyReverseFulfillmentOrderDispositionQueryObject("dispositions");
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
     * The expected number of units.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * The corresponding reverse fulfillment order line item.
     */
    public function selectReverseFulfillmentOrderLineItem(?ShopifyReverseDeliveryLineItemReverseFulfillmentOrderLineItemArgumentsObject $argsObject = null): ShopifyReverseFulfillmentOrderLineItemQueryObject
    {
        $object = new ShopifyReverseFulfillmentOrderLineItemQueryObject("reverseFulfillmentOrderLineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
