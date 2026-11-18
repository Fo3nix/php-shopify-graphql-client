<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one ProductFeed and a cursor during pagination.
 */
class ShopifyProductFeedEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductFeedEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ProductFeedEdge.
     */
    public function selectNode(?ShopifyProductFeedEdgeNodeArgumentsObject $argsObject = null): ShopifyProductFeedQueryObject
    {
        $object = new ShopifyProductFeedQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
