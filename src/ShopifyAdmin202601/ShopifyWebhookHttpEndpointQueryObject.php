<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An HTTPS endpoint that receives webhook events as POST requests, letting your app respond to Shopify events in real-time. This is the most common webhook endpoint type, allowing apps to process Shopify events through standard HTTP callbacks.
 *
 * For example, when setting up order notifications, your app would provide an HTTPS URL like `https://yourapp.com/webhooks/orders/create` to receive order creation events as JSON payloads.
 *
 * HTTP endpoints offer straightforward webhook integration with immediate event delivery, making them suitable for apps that need real-time notifications without complex infrastructure requirements.
 *
 * Learn more about [HTTP webhook configuration](https://shopify.dev/docs/apps/build/webhooks/subscribe/https).
 */
class ShopifyWebhookHttpEndpointQueryObject extends QueryObject
{
    const OBJECT_NAME = "WebhookHttpEndpoint";

    /**
     * The URL to which the webhooks events are sent.
     */
    public function selectCallbackUrl(): static
    {
        $this->selectField("callbackUrl");

        return $this;
    }
}
