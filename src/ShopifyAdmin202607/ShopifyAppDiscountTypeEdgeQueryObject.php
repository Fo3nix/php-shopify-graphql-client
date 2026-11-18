<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one AppDiscountType and a cursor during pagination.
 */
class ShopifyAppDiscountTypeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppDiscountTypeEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of AppDiscountTypeEdge.
     */
    public function selectNode(?ShopifyAppDiscountTypeEdgeNodeArgumentsObject $argsObject = null): ShopifyAppDiscountTypeQueryObject
    {
        $object = new ShopifyAppDiscountTypeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
