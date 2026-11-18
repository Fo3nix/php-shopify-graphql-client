<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A server pixel stores configuration for streaming customer interactions to an EventBridge or PubSub endpoint.
 */
class ShopifyServerPixelQueryObject extends QueryObject
{
    const OBJECT_NAME = "ServerPixel";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The current state of this server pixel.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * Address of the EventBridge or PubSub endpoint.
     */
    public function selectWebhookEndpointAddress(): static
    {
        $this->selectField("webhookEndpointAddress");

        return $this;
    }
}
