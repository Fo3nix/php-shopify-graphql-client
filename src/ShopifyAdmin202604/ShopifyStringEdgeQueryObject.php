<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one String and a cursor during pagination.
 */
class ShopifyStringEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "StringEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of StringEdge.
     */
    public function selectNode(): static
    {
        $this->selectField("node");

        return $this;
    }
}
