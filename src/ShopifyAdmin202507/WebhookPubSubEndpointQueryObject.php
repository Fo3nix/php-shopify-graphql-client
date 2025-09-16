<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class WebhookPubSubEndpointQueryObject extends QueryObject
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
