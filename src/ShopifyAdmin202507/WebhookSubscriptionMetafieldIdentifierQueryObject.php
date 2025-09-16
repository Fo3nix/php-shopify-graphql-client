<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class WebhookSubscriptionMetafieldIdentifierQueryObject extends QueryObject
{
    const OBJECT_NAME = "WebhookSubscriptionMetafieldIdentifier";

    public function selectKey()
    {
        $this->selectField("key");

        return $this;
    }

    public function selectNamespace()
    {
        $this->selectField("namespace");

        return $this;
    }
}
