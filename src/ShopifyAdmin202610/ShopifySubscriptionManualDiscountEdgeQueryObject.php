<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one SubscriptionManualDiscount and a cursor during pagination.
 */
class ShopifySubscriptionManualDiscountEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionManualDiscountEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of SubscriptionManualDiscountEdge.
     */
    public function selectNode(?ShopifySubscriptionManualDiscountEdgeNodeArgumentsObject $argsObject = null): ShopifySubscriptionManualDiscountQueryObject
    {
        $object = new ShopifySubscriptionManualDiscountQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
