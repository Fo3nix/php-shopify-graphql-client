<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one ShopifyPaymentsDispute and a cursor during pagination.
 */
class ShopifyShopifyPaymentsDisputeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsDisputeEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ShopifyPaymentsDisputeEdge.
     */
    public function selectNode(?ShopifyShopifyPaymentsDisputeEdgeNodeArgumentsObject $argsObject = null): ShopifyShopifyPaymentsDisputeQueryObject
    {
        $object = new ShopifyShopifyPaymentsDisputeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
