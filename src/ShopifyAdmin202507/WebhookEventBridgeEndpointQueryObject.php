<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class WebhookEventBridgeEndpointQueryObject extends QueryObject
{
    const OBJECT_NAME = "WebhookEventBridgeEndpoint";

    public function selectArn()
    {
        $this->selectField("arn");

        return $this;
    }
}
