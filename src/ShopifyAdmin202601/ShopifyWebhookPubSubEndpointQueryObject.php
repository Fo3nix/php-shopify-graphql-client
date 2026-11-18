<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Individual Google Cloud Pub/Sub topics that receive webhook events for reliable, asynchronous processing. This endpoint type lets your app tap into Google Cloud's messaging infrastructure to handle events at scale.
 *
 * For example, when inventory levels change, Shopify can publish these events to your Pub/Sub topic `projects/your-project/topics/inventory-updates`, allowing your Google Cloud functions or services to process inventory changes at their own pace.
 *
 * Pub/Sub endpoints provide reliable message delivery to Google Cloud Pub/Sub, making them excellent for apps that need to handle variable webhook volumes or integrate with Google Cloud Platform services.
 *
 * Learn more about [Pub/Sub webhook configuration](https://shopify.dev/docs/apps/build/webhooks/subscribe/get-started).
 */
class ShopifyWebhookPubSubEndpointQueryObject extends QueryObject
{
    const OBJECT_NAME = "WebhookPubSubEndpoint";

    /**
     * The Google Cloud Pub/Sub project ID.
     */
    public function selectPubSubProject(): static
    {
        $this->selectField("pubSubProject");

        return $this;
    }

    /**
     * The Google Cloud Pub/Sub topic ID.
     */
    public function selectPubSubTopic(): static
    {
        $this->selectField("pubSubTopic");

        return $this;
    }
}
