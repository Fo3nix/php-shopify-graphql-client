<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one DiscountAllocation and a cursor during pagination.
 */
class ShopifyDiscountAllocationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAllocationEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of DiscountAllocationEdge.
     */
    public function selectNode(?ShopifyDiscountAllocationEdgeNodeArgumentsObject $argsObject = null): ShopifyDiscountAllocationQueryObject
    {
        $object = new ShopifyDiscountAllocationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
