<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyInventoryShipmentLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyInventoryShipmentTracking;

class ShopifyInventoryShipment
{
    protected $dateCreated;
    protected $dateReceived;
    protected $dateShipped;
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
     * @return Carbon
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    
    /**
     * @return Carbon
     */
    public function getDateReceived()
    {
        return $this->dateReceived;
    }

    
    /**
     * @return Carbon
     */
    public function getDateShipped()
    {
        return $this->dateShipped;
    }

    
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
     * @return ShopifyInventoryShipmentLineItemConnection
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    
    /**
     * @return ShopifyCount
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
     * @return ShopifyInventoryShipmentStatusEnumObject
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
     * @return ShopifyInventoryShipmentTracking
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
            if (isset($data['dateCreated']) && $data['dateCreated'] !== null) {
                $instance->dateCreated = new Carbon($data['dateCreated']);
            }
            if (isset($data['dateReceived']) && $data['dateReceived'] !== null) {
                $instance->dateReceived = new Carbon($data['dateReceived']);
            }
            if (isset($data['dateShipped']) && $data['dateShipped'] !== null) {
                $instance->dateShipped = new Carbon($data['dateShipped']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['lineItemTotalQuantity']) && $data['lineItemTotalQuantity'] !== null) {
                $instance->lineItemTotalQuantity = $data['lineItemTotalQuantity'];
            }
            if (isset($data['lineItems']) && $data['lineItems'] !== null) {
                $instance->lineItems = ShopifyInventoryShipmentLineItemConnection::fromArray($data['lineItems']);
            }
            if (isset($data['lineItemsCount']) && $data['lineItemsCount'] !== null) {
                $instance->lineItemsCount = ShopifyCount::fromArray($data['lineItemsCount']);
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
                $instance->tracking = ShopifyInventoryShipmentTracking::fromArray($data['tracking']);
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
            if ($this->dateCreated !== null) {
                $data['dateCreated'] = $this->dateCreated->toIso8601String();
            }
            if ($this->dateReceived !== null) {
                $data['dateReceived'] = $this->dateReceived->toIso8601String();
            }
            if ($this->dateShipped !== null) {
                $data['dateShipped'] = $this->dateShipped->toIso8601String();
            }
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
