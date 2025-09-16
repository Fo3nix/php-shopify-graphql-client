<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class WebhookSubscriptionEndpointUnionObject extends UnionObject
{
    public function onWebhookEventBridgeEndpoint()
    {
        $object = new WebhookEventBridgeEndpointQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onWebhookHttpEndpoint()
    {
        $object = new WebhookHttpEndpointQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onWebhookPubSubEndpoint()
    {
        $object = new WebhookPubSubEndpointQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
