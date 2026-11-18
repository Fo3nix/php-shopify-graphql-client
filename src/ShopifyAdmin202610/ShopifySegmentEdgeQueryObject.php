<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one Segment and a cursor during pagination.
 */
class ShopifySegmentEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of SegmentEdge.
     */
    public function selectNode(?ShopifySegmentEdgeNodeArgumentsObject $argsObject = null): ShopifySegmentQueryObject
    {
        $object = new ShopifySegmentQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
