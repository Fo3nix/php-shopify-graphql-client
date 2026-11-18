<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one ShopifyFunction and a cursor during pagination.
 */
class ShopifyShopifyFunctionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyFunctionEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ShopifyFunctionEdge.
     */
    public function selectNode(?ShopifyShopifyFunctionEdgeNodeArgumentsObject $argsObject = null): ShopifyShopifyFunctionQueryObject
    {
        $object = new ShopifyShopifyFunctionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
