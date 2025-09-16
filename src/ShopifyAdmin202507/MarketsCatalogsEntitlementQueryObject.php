<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketsCatalogsEntitlementQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketsCatalogsEntitlement";

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }
}
