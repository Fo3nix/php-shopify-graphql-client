<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyInventoryItem;

/**
 * Represents a line item belonging to an inventory transfer.
 */
class ShopifyInventoryTransferLineItem implements ShopifyNode
{
    protected $id;
    protected $inventoryItem;
    protected $pickedForShipmentQuantity;
    protected $processableQuantity;
    protected $shippableQuantity;
    protected $shippedQuantity;
    protected $title;
    protected $totalQuantity;

    
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
     * The quantity of the item that has been picked for a draft shipment but not yet shipped.
     *
     * @return int
     */
    public function getPickedForShipmentQuantity(): ?int
    {
        return $this->pickedForShipmentQuantity;
    }

    
    /**
     * The quantity of the item that can be actioned upon, such as editing the item quantity on the transfer or adding to a shipment.
     *
     * @return int
     */
    public function getProcessableQuantity(): ?int
    {
        return $this->processableQuantity;
    }

    
    /**
     * The quantity of the item that can be shipped.
     *
     * @return int
     */
    public function getShippableQuantity(): ?int
    {
        return $this->shippableQuantity;
    }

    
    /**
     * The quantity of the item that has been shipped.
     *
     * @return int
     */
    public function getShippedQuantity(): ?int
    {
        return $this->shippedQuantity;
    }

    
    /**
     * The title of the product associated with this line item.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * The total quantity of items being transferred.
     *
     * @return int
     */
    public function getTotalQuantity(): ?int
    {
        return $this->totalQuantity;
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
            if (isset($data['inventoryItem']) && $data['inventoryItem'] !== null) {
                $instance->inventoryItem = ShopifyInventoryItem::fromArray($data['inventoryItem']);
            }
            if (isset($data['pickedForShipmentQuantity']) && $data['pickedForShipmentQuantity'] !== null) {
                $instance->pickedForShipmentQuantity = $data['pickedForShipmentQuantity'];
            }
            if (isset($data['processableQuantity']) && $data['processableQuantity'] !== null) {
                $instance->processableQuantity = $data['processableQuantity'];
            }
            if (isset($data['shippableQuantity']) && $data['shippableQuantity'] !== null) {
                $instance->shippableQuantity = $data['shippableQuantity'];
            }
            if (isset($data['shippedQuantity']) && $data['shippedQuantity'] !== null) {
                $instance->shippedQuantity = $data['shippedQuantity'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['totalQuantity']) && $data['totalQuantity'] !== null) {
                $instance->totalQuantity = $data['totalQuantity'];
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
            if ($this->inventoryItem !== null) {
                $data['inventoryItem'] = $this->inventoryItem->asArray();
            }
            if ($this->pickedForShipmentQuantity !== null) {
                $data['pickedForShipmentQuantity'] = $this->pickedForShipmentQuantity;
            }
            if ($this->processableQuantity !== null) {
                $data['processableQuantity'] = $this->processableQuantity;
            }
            if ($this->shippableQuantity !== null) {
                $data['shippableQuantity'] = $this->shippableQuantity;
            }
            if ($this->shippedQuantity !== null) {
                $data['shippedQuantity'] = $this->shippedQuantity;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->totalQuantity !== null) {
                $data['totalQuantity'] = $this->totalQuantity;
            }
            return $data;
        }
}
