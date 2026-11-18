<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Details about an individual quantity name.
 */
class ShopifyInventoryQuantityNameQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryQuantityName";

    /**
     * List of quantity names that this quantity name belongs to.
     */
    public function selectBelongsTo(): static
    {
        $this->selectField("belongsTo");

        return $this;
    }

    /**
     * List of quantity names that comprise this quantity name.
     */
    public function selectComprises(): static
    {
        $this->selectField("comprises");

        return $this;
    }

    /**
     * The display name for quantity names translated into applicable language.
     */
    public function selectDisplayName(): static
    {
        $this->selectField("displayName");

        return $this;
    }

    /**
     * Whether the quantity name has been used by the merchant.
     */
    public function selectIsInUse(): static
    {
        $this->selectField("isInUse");

        return $this;
    }

    /**
     * The [name](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps#inventory-states) of
     * the inventory quantity. Used by
     * [inventory queries and mutations](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps#graphql-queries-and-mutations).
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }
}
