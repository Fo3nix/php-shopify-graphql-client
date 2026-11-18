<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one WebhookSubscription and a cursor during pagination.
 */
class ShopifyWebhookSubscriptionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "WebhookSubscriptionEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of WebhookSubscriptionEdge.
     */
    public function selectNode(?ShopifyWebhookSubscriptionEdgeNodeArgumentsObject $argsObject = null): ShopifyWebhookSubscriptionQueryObject
    {
        $object = new ShopifyWebhookSubscriptionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
