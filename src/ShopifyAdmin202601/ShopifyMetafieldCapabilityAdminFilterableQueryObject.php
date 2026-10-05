<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetafieldCapabilityAdminFilterableQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldCapabilityAdminFilterable";

    public function selectEligible()
    {
        $this->selectField("eligible");

        return $this;
    }

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }
}
