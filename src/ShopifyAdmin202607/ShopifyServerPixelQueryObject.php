<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyServerPixelQueryObject extends QueryObject
{
    const OBJECT_NAME = "ServerPixel";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectWebhookEndpointAddress()
    {
        $this->selectField("webhookEndpointAddress");

        return $this;
    }
}
