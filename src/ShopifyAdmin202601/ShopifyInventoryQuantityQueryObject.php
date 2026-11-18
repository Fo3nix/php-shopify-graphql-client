<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The `InventoryQuantity` object lets you manage and track inventory quantities for specific [states](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps#inventory-states).
 * Inventory quantities represent different states of items such as available for purchase, committed to orders, draft orders, transfers, or shipments, reserved by the merchant, incoming from suppliers, or set aside for quality control or safety stock.
 *
 * You can use [inventory levels](https://shopify.dev/docs/api/admin-graphql/latest/objects/inventorylevel) to manage where inventory items are stocked. You can also [make inventory adjustments](https://shopify.dev/docs/api/admin-graphql/latest/mutations/inventoryAdjustQuantities) to apply changes to inventory quantities.
 *
 * Inventory quantities can be managed by a merchant or by [fulfillment services](https://shopify.dev/docs/api/admin-graphql/latest/objects/fulfillmentservice) that handle inventory tracking.
 * Learn more about working with [Shopify's inventory management system](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps).
 */
class ShopifyInventoryQuantityQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryQuantity";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The inventory state [name](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps#inventory-states)
     * that identifies the inventory quantity.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The quantity of an inventory item at a specific location, for a quantity
     * [name](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps#inventory-states).
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * When the inventory quantity was last updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
