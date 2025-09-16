<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\InventoryItem;

class InventoryTransferLineItem
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
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return InventoryItem
     */
    public function getInventoryItem()
    {
        return $this->inventoryItem;
    }

    
    /**
     * @return int
     */
    public function getPickedForShipmentQuantity()
    {
        return $this->pickedForShipmentQuantity;
    }

    
    /**
     * @return int
     */
    public function getProcessableQuantity()
    {
        return $this->processableQuantity;
    }

    
    /**
     * @return int
     */
    public function getShippableQuantity()
    {
        return $this->shippableQuantity;
    }

    
    /**
     * @return int
     */
    public function getShippedQuantity()
    {
        return $this->shippedQuantity;
    }

    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    
    /**
     * @return int
     */
    public function getTotalQuantity()
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
                $instance->inventoryItem = InventoryItem::fromArray($data['inventoryItem']);
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
