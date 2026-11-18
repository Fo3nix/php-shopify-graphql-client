<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one AppPurchaseOneTime and a cursor during pagination.
 */
class ShopifyAppPurchaseOneTimeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppPurchaseOneTimeEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of AppPurchaseOneTimeEdge.
     */
    public function selectNode(?ShopifyAppPurchaseOneTimeEdgeNodeArgumentsObject $argsObject = null): ShopifyAppPurchaseOneTimeQueryObject
    {
        $object = new ShopifyAppPurchaseOneTimeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
