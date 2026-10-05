<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyWebhookEventBridgeEndpointQueryObject extends QueryObject
{
    const OBJECT_NAME = "WebhookEventBridgeEndpoint";

    public function selectArn()
    {
        $this->selectField("arn");

        return $this;
    }
}
