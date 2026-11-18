<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyInventoryItem;

/**
 * Represents a single line item within an inventory shipment.
 */
class ShopifyInventoryShipmentLineItem implements ShopifyNode
{
    protected $acceptedQuantity;
    protected $createdAt;
    protected $id;
    protected $inventoryItem;
    protected $quantity;
    protected $rejectedQuantity;
    protected $unreceivedQuantity;

    
    /**
     * The quantity of items that were accepted in this shipment line item.
     *
     * @return int
     */
    public function getAcceptedQuantity(): ?int
    {
        return $this->acceptedQuantity;
    }

    
    /**
     * The date and time the shipment line item was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
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
     * The inventory item associated with this line item.
     *
     * @return ShopifyInventoryItem
     */
    public function getInventoryItem(): ?ShopifyInventoryItem
    {
        return $this->inventoryItem;
    }

    
    /**
     * The quantity of items in this shipment line item.
     *
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    
    /**
     * The quantity of items that were rejected in this shipment line item.
     *
     * @return int
     */
    public function getRejectedQuantity(): ?int
    {
        return $this->rejectedQuantity;
    }

    
    /**
     * The total quantity of units that haven't been accepted, rejected, or marked as canceled in this shipment line item.
     *
     * @return int
     */
    public function getUnreceivedQuantity(): ?int
    {
        return $this->unreceivedQuantity;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['acceptedQuantity']) && $data['acceptedQuantity'] !== null) {
                $instance->acceptedQuantity = $data['acceptedQuantity'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['inventoryItem']) && $data['inventoryItem'] !== null) {
                $instance->inventoryItem = ShopifyInventoryItem::fromArray($data['inventoryItem']);
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['rejectedQuantity']) && $data['rejectedQuantity'] !== null) {
                $instance->rejectedQuantity = $data['rejectedQuantity'];
            }
            if (isset($data['unreceivedQuantity']) && $data['unreceivedQuantity'] !== null) {
                $instance->unreceivedQuantity = $data['unreceivedQuantity'];
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
            if ($this->acceptedQuantity !== null) {
                $data['acceptedQuantity'] = $this->acceptedQuantity;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->inventoryItem !== null) {
                $data['inventoryItem'] = $this->inventoryItem->asArray();
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->rejectedQuantity !== null) {
                $data['rejectedQuantity'] = $this->rejectedQuantity;
            }
            if ($this->unreceivedQuantity !== null) {
                $data['unreceivedQuantity'] = $this->unreceivedQuantity;
            }
            return $data;
        }
}
