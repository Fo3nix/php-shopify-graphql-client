<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one Page and a cursor during pagination.
 */
class ShopifyPageEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "PageEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of PageEdge.
     */
    public function selectNode(?ShopifyPageEdgeNodeArgumentsObject $argsObject = null): ShopifyPageQueryObject
    {
        $object = new ShopifyPageQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
