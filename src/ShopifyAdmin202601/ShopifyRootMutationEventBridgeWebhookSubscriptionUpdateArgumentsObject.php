<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationEventBridgeWebhookSubscriptionUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "webhookSubscription"];

    protected $id;
    protected $webhookSubscription;

    /**
     * The ID of the webhook subscription to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Specifies the input fields for an EventBridge webhook subscription.
     */
    public function setWebhookSubscription(ShopifyEventBridgeWebhookSubscriptionInputInputObject $shopifyEventBridgeWebhookSubscriptionInputInputObject): static
    {
        $this->webhookSubscription = $shopifyEventBridgeWebhookSubscriptionInputInputObject;

        return $this;
    }
}
