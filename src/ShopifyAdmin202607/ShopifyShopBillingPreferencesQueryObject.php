<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Billing preferences for the shop.
 */
class ShopifyShopBillingPreferencesQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopBillingPreferences";

    /**
     * The currency the shop uses to pay for apps and services.
     */
    public function selectCurrency(): static
    {
        $this->selectField("currency");

        return $this;
    }
}
