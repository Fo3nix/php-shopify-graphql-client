<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class WebhookHttpEndpointQueryObject extends QueryObject
{
    const OBJECT_NAME = "WebhookHttpEndpoint";

    public function selectCallbackUrl()
    {
        $this->selectField("callbackUrl");

        return $this;
    }
}
