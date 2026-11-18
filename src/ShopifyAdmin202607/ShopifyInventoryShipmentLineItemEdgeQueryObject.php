<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one InventoryShipmentLineItem and a cursor during pagination.
 */
class ShopifyInventoryShipmentLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipmentLineItemEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of InventoryShipmentLineItemEdge.
     */
    public function selectNode(?ShopifyInventoryShipmentLineItemEdgeNodeArgumentsObject $argsObject = null): ShopifyInventoryShipmentLineItemQueryObject
    {
        $object = new ShopifyInventoryShipmentLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
