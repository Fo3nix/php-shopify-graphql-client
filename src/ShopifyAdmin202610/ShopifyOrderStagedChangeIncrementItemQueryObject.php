<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An addition of items to an existing line item on the order.
 */
class ShopifyOrderStagedChangeIncrementItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderStagedChangeIncrementItem";

    /**
     * The number of items added.
     */
    public function selectDelta(): static
    {
        $this->selectField("delta");

        return $this;
    }

    /**
     * The original line item.
     */
    public function selectLineItem(?ShopifyOrderStagedChangeIncrementItemLineItemArgumentsObject $argsObject = null): ShopifyLineItemQueryObject
    {
        $object = new ShopifyLineItemQueryObject("lineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
