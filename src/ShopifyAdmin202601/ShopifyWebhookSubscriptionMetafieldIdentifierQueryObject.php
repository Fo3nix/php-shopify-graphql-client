<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyWebhookSubscriptionMetafieldIdentifierQueryObject extends QueryObject
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
