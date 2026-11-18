<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPubSubWebhookSubscriptionUpdateArgumentsObject extends ArgumentsObject
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
     * Specifies the input fields for a Google Cloud Pub/Sub webhook subscription.
     */
    public function setWebhookSubscription(ShopifyPubSubWebhookSubscriptionInputInputObject $shopifyPubSubWebhookSubscriptionInputInputObject): static
    {
        $this->webhookSubscription = $shopifyPubSubWebhookSubscriptionInputInputObject;

        return $this;
    }
}
