<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\UnionObject;

class ShopifyWebhookSubscriptionEndpointUnionObject extends UnionObject
{
    public function onShopifyWebhookEventBridgeEndpoint()
    {
        $object = new ShopifyWebhookEventBridgeEndpointQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyWebhookHttpEndpoint()
    {
        $object = new ShopifyWebhookHttpEndpointQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyWebhookPubSubEndpoint()
    {
        $object = new ShopifyWebhookPubSubEndpointQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
