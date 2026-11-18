<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\UnionObject;

/**
 * An endpoint to which webhook subscriptions send webhooks events.
 */
class ShopifyWebhookSubscriptionEndpointUnionObject extends UnionObject
{
    public function onShopifyWebhookEventBridgeEndpoint(): ShopifyWebhookEventBridgeEndpointQueryObject
    {
        $object = new ShopifyWebhookEventBridgeEndpointQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyWebhookHttpEndpoint(): ShopifyWebhookHttpEndpointQueryObject
    {
        $object = new ShopifyWebhookHttpEndpointQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyWebhookPubSubEndpoint(): ShopifyWebhookPubSubEndpointQueryObject
    {
        $object = new ShopifyWebhookPubSubEndpointQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
