<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationWebhookSubscriptionUpdateArgumentsObject extends ArgumentsObject
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
     * Specifies the input fields for a webhook subscription.
     */
    public function setWebhookSubscription(ShopifyWebhookSubscriptionInputInputObject $shopifyWebhookSubscriptionInputInputObject): static
    {
        $this->webhookSubscription = $shopifyWebhookSubscriptionInputInputObject;

        return $this;
    }
}
