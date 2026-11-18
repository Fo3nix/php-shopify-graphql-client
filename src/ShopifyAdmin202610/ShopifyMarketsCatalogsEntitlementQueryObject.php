<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The entitlements for catalogs.
 */
class ShopifyMarketsCatalogsEntitlementQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketsCatalogsEntitlement";

    /**
     * Whether catalogs are enabled.
     */
    public function selectEnabled(): static
    {
        $this->selectField("enabled");

        return $this;
    }

    /**
     * The maximum number of catalogs allowed.
     */
    public function selectLimit(): static
    {
        $this->selectField("limit");

        return $this;
    }
}
