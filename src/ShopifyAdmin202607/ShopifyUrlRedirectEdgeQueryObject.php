<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one UrlRedirect and a cursor during pagination.
 */
class ShopifyUrlRedirectEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "UrlRedirectEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of UrlRedirectEdge.
     */
    public function selectNode(?ShopifyUrlRedirectEdgeNodeArgumentsObject $argsObject = null): ShopifyUrlRedirectQueryObject
    {
        $object = new ShopifyUrlRedirectQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
