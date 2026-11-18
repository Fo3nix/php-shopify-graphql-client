<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one SegmentValue and a cursor during pagination.
 */
class ShopifySegmentValueEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentValueEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of SegmentValueEdge.
     */
    public function selectNode(?ShopifySegmentValueEdgeNodeArgumentsObject $argsObject = null): ShopifySegmentValueQueryObject
    {
        $object = new ShopifySegmentValueQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
