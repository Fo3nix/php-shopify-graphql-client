<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one InventoryItem and a cursor during pagination.
 */
class ShopifyInventoryItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryItemEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of InventoryItemEdge.
     */
    public function selectNode(?ShopifyInventoryItemEdgeNodeArgumentsObject $argsObject = null): ShopifyInventoryItemQueryObject
    {
        $object = new ShopifyInventoryItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
