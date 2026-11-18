<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one DiscountApplication and a cursor during pagination.
 */
class ShopifyDiscountApplicationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountApplicationEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of DiscountApplicationEdge.
     */
    public function selectNode(?ShopifyDiscountApplicationEdgeNodeArgumentsObject $argsObject = null): ShopifyDiscountApplicationInterfaceObject
    {
        $object = new ShopifyDiscountApplicationInterfaceObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
