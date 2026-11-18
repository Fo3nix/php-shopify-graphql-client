<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one SegmentFilter and a cursor during pagination.
 */
class ShopifySegmentFilterEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentFilterEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of SegmentFilterEdge.
     */
    public function selectNode(?ShopifySegmentFilterEdgeNodeArgumentsObject $argsObject = null): ShopifySegmentFilterInterfaceObject
    {
        $object = new ShopifySegmentFilterInterfaceObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
