<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

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
