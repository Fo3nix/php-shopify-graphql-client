<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The store credit configuration for a shop.
 */
class ShopifyStoreCreditConfigurationQueryObject extends QueryObject
{
    const OBJECT_NAME = "StoreCreditConfiguration";

    /**
     * Whether store credit is enabled for customers on checkout.
     */
    public function selectStoreCreditEnabled(): static
    {
        $this->selectField("storeCreditEnabled");

        return $this;
    }
}
