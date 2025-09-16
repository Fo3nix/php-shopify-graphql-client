<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\InventoryItem;

class InventoryShipmentLineItem
{
    protected $acceptedQuantity;
    protected $id;
    protected $inventoryItem;
    protected $quantity;
    protected $rejectedQuantity;
    protected $unreceivedQuantity;

    
    /**
     * @return int
     */
    public function getAcceptedQuantity()
    {
        return $this->acceptedQuantity;
    }

    
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
    public function getQuantity()
    {
        return $this->quantity;
    }

    
    /**
     * @return int
     */
    public function getRejectedQuantity()
    {
        return $this->rejectedQuantity;
    }

    
    /**
     * @return int
     */
    public function getUnreceivedQuantity()
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
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['inventoryItem']) && $data['inventoryItem'] !== null) {
                $instance->inventoryItem = InventoryItem::fromArray($data['inventoryItem']);
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
