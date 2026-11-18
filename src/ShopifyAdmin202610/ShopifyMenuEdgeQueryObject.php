<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one Menu and a cursor during pagination.
 */
class ShopifyMenuEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MenuEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of MenuEdge.
     */
    public function selectNode(?ShopifyMenuEdgeNodeArgumentsObject $argsObject = null): ShopifyMenuQueryObject
    {
        $object = new ShopifyMenuQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
