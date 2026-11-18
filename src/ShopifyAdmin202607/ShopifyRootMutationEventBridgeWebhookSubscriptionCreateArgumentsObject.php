<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationEventBridgeWebhookSubscriptionCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["topic", "webhookSubscription"];

    protected $topic;
    protected $webhookSubscription;

    /**
     * The type of event that triggers the webhook.
     */
    public function setTopic($shopifyWebhookSubscriptionTopic): static
    {
        $this->topic = new RawObject($shopifyWebhookSubscriptionTopic);

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
