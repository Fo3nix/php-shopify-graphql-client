<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one RequestedOrderEdit and a cursor during pagination.
 */
class ShopifyRequestedOrderEditEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "RequestedOrderEditEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of RequestedOrderEditEdge.
     */
    public function selectNode(?ShopifyRequestedOrderEditEdgeNodeArgumentsObject $argsObject = null): ShopifyRequestedOrderEditQueryObject
    {
        $object = new ShopifyRequestedOrderEditQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
