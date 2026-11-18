<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one InventoryLevel and a cursor during pagination.
 */
class ShopifyInventoryLevelEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryLevelEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of InventoryLevelEdge.
     */
    public function selectNode(?ShopifyInventoryLevelEdgeNodeArgumentsObject $argsObject = null): ShopifyInventoryLevelQueryObject
    {
        $object = new ShopifyInventoryLevelQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
