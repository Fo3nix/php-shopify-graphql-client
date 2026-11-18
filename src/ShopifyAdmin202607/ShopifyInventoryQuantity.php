<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Carbon\Carbon;

/**
 * The `InventoryQuantity` object lets you manage and track inventory quantities for specific [states](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps#inventory-states).
 * Inventory quantities represent different states of items such as available for purchase, committed to orders, draft orders, transfers, or shipments, reserved by the merchant, incoming from suppliers, or set aside for quality control or safety stock.
 *
 * You can use [inventory levels](https://shopify.dev/docs/api/admin-graphql/latest/objects/inventorylevel) to manage where inventory items are stocked. You can also [make inventory adjustments](https://shopify.dev/docs/api/admin-graphql/latest/mutations/inventoryAdjustQuantities) to apply changes to inventory quantities.
 *
 * Inventory quantities can be managed by a merchant or by [fulfillment services](https://shopify.dev/docs/api/admin-graphql/latest/objects/fulfillmentservice) that handle inventory tracking.
 * Learn more about working with [Shopify's inventory management system](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps).
 */
class ShopifyInventoryQuantity implements ShopifyNode
{
    protected $id;
    protected $name;
    protected $quantity;
    protected $updatedAt;

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The inventory state [name](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps#inventory-states)
     * that identifies the inventory quantity.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The quantity of an inventory item at a specific location, for a quantity
     * [name](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps#inventory-states).
     *
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    
    /**
     * When the inventory quantity was last updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
