<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one DeletionEvent and a cursor during pagination.
 */
class ShopifyDeletionEventEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeletionEventEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of DeletionEventEdge.
     */
    public function selectNode(?ShopifyDeletionEventEdgeNodeArgumentsObject $argsObject = null): ShopifyDeletionEventQueryObject
    {
        $object = new ShopifyDeletionEventQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
