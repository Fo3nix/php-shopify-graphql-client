<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetafieldCapabilityAnalyticsQueryableQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldCapabilityAnalyticsQueryable";

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
}
