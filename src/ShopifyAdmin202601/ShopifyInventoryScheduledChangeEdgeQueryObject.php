<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one InventoryScheduledChange and a cursor during pagination.
 */
class ShopifyInventoryScheduledChangeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryScheduledChangeEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of InventoryScheduledChangeEdge.
     */
    public function selectNode(?ShopifyInventoryScheduledChangeEdgeNodeArgumentsObject $argsObject = null): ShopifyInventoryScheduledChangeQueryObject
    {
        $object = new ShopifyInventoryScheduledChangeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
