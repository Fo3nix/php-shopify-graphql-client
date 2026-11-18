<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An removal of items from an existing line item on the order.
 */
class ShopifyOrderStagedChangeDecrementItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderStagedChangeDecrementItem";

    /**
     * The number of items removed.
     */
    public function selectDelta(): static
    {
        $this->selectField("delta");

        return $this;
    }

    /**
     * The original line item.
     */
    public function selectLineItem(?ShopifyOrderStagedChangeDecrementItemLineItemArgumentsObject $argsObject = null): ShopifyLineItemQueryObject
    {
        $object = new ShopifyLineItemQueryObject("lineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The intention to restock the removed items.
     */
    public function selectRestock(): static
    {
        $this->selectField("restock");

        return $this;
    }
}
