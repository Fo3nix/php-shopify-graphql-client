<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one ArticleAuthor and a cursor during pagination.
 */
class ShopifyArticleAuthorEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ArticleAuthorEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ArticleAuthorEdge.
     */
    public function selectNode(?ShopifyArticleAuthorEdgeNodeArgumentsObject $argsObject = null): ShopifyArticleAuthorQueryObject
    {
        $object = new ShopifyArticleAuthorQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
