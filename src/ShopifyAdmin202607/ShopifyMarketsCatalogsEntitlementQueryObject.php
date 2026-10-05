<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketsCatalogsEntitlementQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketsCatalogsEntitlement";

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }

    public function selectLimit()
    {
        $this->selectField("limit");

        return $this;
    }
}
