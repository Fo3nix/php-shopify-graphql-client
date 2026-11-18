<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationWebhookSubscriptionCreateArgumentsObject extends ArgumentsObject
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
     * Specifies the input fields for a webhook subscription.
     */
    public function setWebhookSubscription(ShopifyWebhookSubscriptionInputInputObject $shopifyWebhookSubscriptionInputInputObject): static
    {
        $this->webhookSubscription = $shopifyWebhookSubscriptionInputInputObject;

        return $this;
    }
}
