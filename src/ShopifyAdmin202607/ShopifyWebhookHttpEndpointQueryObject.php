<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyWebhookHttpEndpointQueryObject extends QueryObject
{
    const OBJECT_NAME = "WebhookHttpEndpoint";

    public function selectCallbackUrl()
    {
        $this->selectField("callbackUrl");

        return $this;
    }
}
