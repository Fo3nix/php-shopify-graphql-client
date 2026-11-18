<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one Comment and a cursor during pagination.
 */
class ShopifyCommentEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CommentEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CommentEdge.
     */
    public function selectNode(?ShopifyCommentEdgeNodeArgumentsObject $argsObject = null): ShopifyCommentQueryObject
    {
        $object = new ShopifyCommentQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
