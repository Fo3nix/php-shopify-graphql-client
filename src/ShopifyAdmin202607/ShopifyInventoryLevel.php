<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyInventoryItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyLocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyInventoryQuantity;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyInventoryScheduledChangeConnection;

/**
 * The quantities of an inventory item at a specific location. Each inventory level connects one [`InventoryItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryItem) to one [`Location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location), tracking multiple quantity states like available, on-hand, incoming, and committed.
 *
 * The [`quantities`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryLevel#field-InventoryLevel.fields.quantities) field provides access to different inventory states. Learn [more about inventory states and relationships](https://shopify.dev/docs/apps/build/orders-fulfillment/inventory-management-apps/manage-quantities-states#inventory-object-relationships).
 */
class ShopifyInventoryLevel implements ShopifyNode
{
    protected $canDeactivate;
    protected $createdAt;
    protected $deactivationAlert;
    protected $id;
    protected $isActive;
    protected $item;
    protected $location;
    protected $quantities;
    protected $scheduledChanges;
    protected $updatedAt;

    
    /**
     * Whether the inventory items associated with the inventory level can be deactivated.
     *
     * @return bool
     */
    public function getCanDeactivate(): ?bool
    {
        return $this->canDeactivate;
    }

    
    /**
     * The date and time when the inventory level was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * Describes either the impact of deactivating the inventory level, or why the inventory level can't be deactivated.
     *
     * @return string
     */
    public function getDeactivationAlert(): ?string
    {
        return $this->deactivationAlert;
    }

    
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
     * Whether the inventory level is active.
     *
     * @return bool
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    
    /**
     * Inventory item associated with the inventory level.
     *
     * @return ShopifyInventoryItem
     */
    public function getItem(): ?ShopifyInventoryItem
    {
        return $this->item;
    }

    
    /**
     * The location associated with the inventory level.
     *
     * @return ShopifyLocation
     */
    public function getLocation(): ?ShopifyLocation
    {
        return $this->location;
    }

    
    /**
     * The quantity of an inventory item at a specific location, for a quantity
     * [name](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps#inventory-states).
     *
     * @return ShopifyInventoryQuantity[]
     */
    public function getQuantities(): ?array
    {
        return $this->quantities;
    }

    
    /**
     * Scheduled changes for the requested quantity names.
     *
     * @return ShopifyInventoryScheduledChangeConnection
     */
    public function getScheduledChanges(): ?ShopifyInventoryScheduledChangeConnection
    {
        return $this->scheduledChanges;
    }

    
    /**
     * The date and time when the inventory level was updated.
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
            if (isset($data['canDeactivate']) && $data['canDeactivate'] !== null) {
                $instance->canDeactivate = $data['canDeactivate'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['deactivationAlert']) && $data['deactivationAlert'] !== null) {
                $instance->deactivationAlert = $data['deactivationAlert'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['isActive']) && $data['isActive'] !== null) {
                $instance->isActive = $data['isActive'];
            }
            if (isset($data['item']) && $data['item'] !== null) {
                $instance->item = ShopifyInventoryItem::fromArray($data['item']);
            }
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = ShopifyLocation::fromArray($data['location']);
            }
            if (isset($data['quantities']) && $data['quantities'] !== null) {
                $instance->quantities = array_map(function($item) { return ShopifyInventoryQuantity::fromArray($item); }, $data['quantities']);
            }
            if (isset($data['scheduledChanges']) && $data['scheduledChanges'] !== null) {
                $instance->scheduledChanges = ShopifyInventoryScheduledChangeConnection::fromArray($data['scheduledChanges']);
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
            if ($this->canDeactivate !== null) {
                $data['canDeactivate'] = $this->canDeactivate;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->deactivationAlert !== null) {
                $data['deactivationAlert'] = $this->deactivationAlert;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->isActive !== null) {
                $data['isActive'] = $this->isActive;
            }
            if ($this->item !== null) {
                $data['item'] = $this->item->asArray();
            }
            if ($this->location !== null) {
                $data['location'] = $this->location->asArray();
            }
            if ($this->quantities !== null) {
                $data['quantities'] = array_map(function($item) { return $item->asArray(); }, $this->quantities);
            }
            if ($this->scheduledChanges !== null) {
                $data['scheduledChanges'] = $this->scheduledChanges->asArray();
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
