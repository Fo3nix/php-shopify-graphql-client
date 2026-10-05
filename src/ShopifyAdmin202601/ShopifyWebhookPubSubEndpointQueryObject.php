<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyWebhookPubSubEndpointQueryObject extends QueryObject
{
    const OBJECT_NAME = "WebhookPubSubEndpoint";

    public function selectPubSubProject()
    {
        $this->selectField("pubSubProject");

        return $this;
    }

    public function selectPubSubTopic()
    {
        $this->selectField("pubSubTopic");

        return $this;
    }
}
