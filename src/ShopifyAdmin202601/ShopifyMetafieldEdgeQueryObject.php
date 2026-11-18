<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one Metafield and a cursor during pagination.
 */
class ShopifyMetafieldEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of MetafieldEdge.
     */
    public function selectNode(?ShopifyMetafieldEdgeNodeArgumentsObject $argsObject = null): ShopifyMetafieldQueryObject
    {
        $object = new ShopifyMetafieldQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
