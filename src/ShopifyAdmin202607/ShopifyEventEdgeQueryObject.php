<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one Event and a cursor during pagination.
 */
class ShopifyEventEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "EventEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of EventEdge.
     */
    public function selectNode(?ShopifyEventEdgeNodeArgumentsObject $argsObject = null): ShopifyEventInterfaceObject
    {
        $object = new ShopifyEventInterfaceObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
