<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\InventoryShipmentLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Count;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\InventoryShipmentTracking;

class InventoryShipment
{
    protected $id;
    protected $lineItemTotalQuantity;
    protected $lineItems;
    protected $lineItemsCount;
    protected $name;
    protected $status;
    protected $totalAcceptedQuantity;
    protected $totalReceivedQuantity;
    protected $totalRejectedQuantity;
    protected $tracking;

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return int
     */
    public function getLineItemTotalQuantity()
    {
        return $this->lineItemTotalQuantity;
    }

    
    /**
     * @return InventoryShipmentLineItemConnection
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    
    /**
     * @return Count
     */
    public function getLineItemsCount()
    {
        return $this->lineItemsCount;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return InventoryShipmentStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return int
     */
    public function getTotalAcceptedQuantity()
    {
        return $this->totalAcceptedQuantity;
    }

    
    /**
     * @return int
     */
    public function getTotalReceivedQuantity()
    {
        return $this->totalReceivedQuantity;
    }

    
    /**
     * @return int
     */
    public function getTotalRejectedQuantity()
    {
        return $this->totalRejectedQuantity;
    }

    
    /**
     * @return InventoryShipmentTracking
     */
    public function getTracking()
    {
        return $this->tracking;
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
            if (isset($data['lineItemTotalQuantity']) && $data['lineItemTotalQuantity'] !== null) {
                $instance->lineItemTotalQuantity = $data['lineItemTotalQuantity'];
            }
            if (isset($data['lineItems']) && $data['lineItems'] !== null) {
                $instance->lineItems = InventoryShipmentLineItemConnection::fromArray($data['lineItems']);
            }
            if (isset($data['lineItemsCount']) && $data['lineItemsCount'] !== null) {
                $instance->lineItemsCount = Count::fromArray($data['lineItemsCount']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['totalAcceptedQuantity']) && $data['totalAcceptedQuantity'] !== null) {
                $instance->totalAcceptedQuantity = $data['totalAcceptedQuantity'];
            }
            if (isset($data['totalReceivedQuantity']) && $data['totalReceivedQuantity'] !== null) {
                $instance->totalReceivedQuantity = $data['totalReceivedQuantity'];
            }
            if (isset($data['totalRejectedQuantity']) && $data['totalRejectedQuantity'] !== null) {
                $instance->totalRejectedQuantity = $data['totalRejectedQuantity'];
            }
            if (isset($data['tracking']) && $data['tracking'] !== null) {
                $instance->tracking = InventoryShipmentTracking::fromArray($data['tracking']);
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
            if ($this->lineItemTotalQuantity !== null) {
                $data['lineItemTotalQuantity'] = $this->lineItemTotalQuantity;
            }
            if ($this->lineItems !== null) {
                $data['lineItems'] = $this->lineItems->asArray();
            }
            if ($this->lineItemsCount !== null) {
                $data['lineItemsCount'] = $this->lineItemsCount->asArray();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->totalAcceptedQuantity !== null) {
                $data['totalAcceptedQuantity'] = $this->totalAcceptedQuantity;
            }
            if ($this->totalReceivedQuantity !== null) {
                $data['totalReceivedQuantity'] = $this->totalReceivedQuantity;
            }
            if ($this->totalRejectedQuantity !== null) {
                $data['totalRejectedQuantity'] = $this->totalRejectedQuantity;
            }
            if ($this->tracking !== null) {
                $data['tracking'] = $this->tracking->asArray();
            }
            return $data;
        }
}
