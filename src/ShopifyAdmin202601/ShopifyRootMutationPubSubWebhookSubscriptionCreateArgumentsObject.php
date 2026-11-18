<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationPubSubWebhookSubscriptionCreateArgumentsObject extends ArgumentsObject
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
     * Specifies the input fields for a Google Cloud Pub/Sub webhook subscription.
     */
    public function setWebhookSubscription(ShopifyPubSubWebhookSubscriptionInputInputObject $shopifyPubSubWebhookSubscriptionInputInputObject): static
    {
        $this->webhookSubscription = $shopifyPubSubWebhookSubscriptionInputInputObject;

        return $this;
    }
}
