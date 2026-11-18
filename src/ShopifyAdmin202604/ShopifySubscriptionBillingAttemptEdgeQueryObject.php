<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one SubscriptionBillingAttempt and a cursor during pagination.
 */
class ShopifySubscriptionBillingAttemptEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of SubscriptionBillingAttemptEdge.
     */
    public function selectNode(?ShopifySubscriptionBillingAttemptEdgeNodeArgumentsObject $argsObject = null): ShopifySubscriptionBillingAttemptQueryObject
    {
        $object = new ShopifySubscriptionBillingAttemptQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
