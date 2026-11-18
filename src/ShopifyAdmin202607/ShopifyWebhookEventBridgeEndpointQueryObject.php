<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Connects your app to Amazon EventBridge so you can receive Shopify webhook events and process them through AWS's event-driven architecture. This gives you enterprise-grade scalability and lets you tap into the full AWS ecosystem for handling webhook traffic.
 *
 * For example, when a customer places an order, Shopify can publish the order creation event directly to your EventBridge partner source, allowing your AWS infrastructure to process the event through Lambda functions, SQS queues, or other AWS services.
 *
 * EventBridge endpoints provide enterprise-grade event routing and processing capabilities, making them ideal for apps that need to handle high-volume webhook traffic or integrate deeply with AWS services.
 *
 * Learn more about [webhook endpoints](https://shopify.dev/docs/apps/build/webhooks/subscribe/get-started).
 */
class ShopifyWebhookEventBridgeEndpointQueryObject extends QueryObject
{
    const OBJECT_NAME = "WebhookEventBridgeEndpoint";

    /**
     * The ARN of this EventBridge partner event source.
     */
    public function selectArn(): static
    {
        $this->selectField("arn");

        return $this;
    }
}
