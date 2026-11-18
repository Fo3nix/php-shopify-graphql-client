<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one StorefrontAccessToken and a cursor during pagination.
 */
class ShopifyStorefrontAccessTokenEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "StorefrontAccessTokenEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of StorefrontAccessTokenEdge.
     */
    public function selectNode(?ShopifyStorefrontAccessTokenEdgeNodeArgumentsObject $argsObject = null): ShopifyStorefrontAccessTokenQueryObject
    {
        $object = new ShopifyStorefrontAccessTokenQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
