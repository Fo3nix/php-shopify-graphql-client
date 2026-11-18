<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The entitlements for themes.
 */
class ShopifyMarketsThemesEntitlementQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketsThemesEntitlement";

    /**
     * Whether themes are enabled.
     */
    public function selectEnabled(): static
    {
        $this->selectField("enabled");

        return $this;
    }
}
