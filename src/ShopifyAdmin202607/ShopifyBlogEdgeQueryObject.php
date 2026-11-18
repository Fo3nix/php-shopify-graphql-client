<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one Blog and a cursor during pagination.
 */
class ShopifyBlogEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "BlogEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of BlogEdge.
     */
    public function selectNode(?ShopifyBlogEdgeNodeArgumentsObject $argsObject = null): ShopifyBlogQueryObject
    {
        $object = new ShopifyBlogQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
