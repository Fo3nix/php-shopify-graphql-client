<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyInventoryAdjustmentGroupChangesArgumentsObject extends ArgumentsObject
{
    protected $inventoryItemIds;
    protected $locationIds;
    protected $quantityNames;

    /**
     * The IDs of the inventory items to filter changes by.
     */
    public function setInventoryItemIds(array $inventoryItemIds): static
    {
        $this->inventoryItemIds = $inventoryItemIds;

        return $this;
    }

    /**
     * The IDs of the locations to filter changes by.
     */
    public function setLocationIds(array $locationIds): static
    {
        $this->locationIds = $locationIds;

        return $this;
    }

    /**
     * The [names](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps#inventory-states)
     * of the requested inventory quantities.
     */
    public function setQuantityNames(array $quantityNames): static
    {
        $this->quantityNames = $quantityNames;

        return $this;
    }
}
