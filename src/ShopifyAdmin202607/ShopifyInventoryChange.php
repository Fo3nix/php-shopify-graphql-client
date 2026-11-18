<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyInventoryItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyLocation;

/**
 * A change in an inventory quantity of an inventory item at a location. Each change tracks how inventory moves between different states like available, committed, reserved, or damaged.
 *
 * The change captures the [amount changed](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryChange#field-InventoryChange.fields.delta), the resulting [quantity](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryChange#field-InventoryChange.fields.quantityAfterChange), and links to the associated [`InventoryItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryItem) and [`Location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location).
 *
 * The [`name`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryChange#field-InventoryChange.fields.name) field indicates which inventory state changed, such as `available`, `reserved`, or `damaged`. The [`ledgerDocumentUri`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryChange#field-InventoryChange.fields.ledgerDocumentUri) field provides an audit trail by referencing the source document or system that triggered the change.
 */
class ShopifyInventoryChange
{
    protected $delta;
    protected $item;
    protected $ledgerDocumentUri;
    protected $location;
    protected $name;
    protected $quantityAfterChange;

    
    /**
     * The amount by which the inventory quantity was changed.
     *
     * @return int
     */
    public function getDelta(): ?int
    {
        return $this->delta;
    }

    
    /**
     * The inventory item associated with this inventory change.
     *
     * @return ShopifyInventoryItem
     */
    public function getItem(): ?ShopifyInventoryItem
    {
        return $this->item;
    }

    
    /**
     * A URI that represents what the inventory quantity change was applied to.
     *
     * @return string
     */
    public function getLedgerDocumentUri(): ?string
    {
        return $this->ledgerDocumentUri;
    }

    
    /**
     * The location associated with this inventory change.
     *
     * @return ShopifyLocation
     */
    public function getLocation(): ?ShopifyLocation
    {
        return $this->location;
    }

    
    /**
     * The [name](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps#inventory-states)
     * of the inventory quantity that was changed.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The quantity of named inventory after the change.
     *
     * @return int
     */
    public function getQuantityAfterChange(): ?int
    {
        return $this->quantityAfterChange;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['delta']) && $data['delta'] !== null) {
                $instance->delta = $data['delta'];
            }
            if (isset($data['item']) && $data['item'] !== null) {
                $instance->item = ShopifyInventoryItem::fromArray($data['item']);
            }
            if (isset($data['ledgerDocumentUri']) && $data['ledgerDocumentUri'] !== null) {
                $instance->ledgerDocumentUri = $data['ledgerDocumentUri'];
            }
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = ShopifyLocation::fromArray($data['location']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['quantityAfterChange']) && $data['quantityAfterChange'] !== null) {
                $instance->quantityAfterChange = $data['quantityAfterChange'];
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
            if ($this->delta !== null) {
                $data['delta'] = $this->delta;
            }
            if ($this->item !== null) {
                $data['item'] = $this->item->asArray();
            }
            if ($this->ledgerDocumentUri !== null) {
                $data['ledgerDocumentUri'] = $this->ledgerDocumentUri;
            }
            if ($this->location !== null) {
                $data['location'] = $this->location->asArray();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->quantityAfterChange !== null) {
                $data['quantityAfterChange'] = $this->quantityAfterChange;
            }
            return $data;
        }
}
