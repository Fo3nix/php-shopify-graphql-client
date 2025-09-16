<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentEventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Location;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Order;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentOriginAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentService;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentTrackingInfo;

class Fulfillment
{
    protected $createdAt;
    protected $deliveredAt;
    protected $displayStatus;
    protected $estimatedDeliveryAt;
    protected $events;
    protected $fulfillmentLineItems;
    protected $fulfillmentOrders;
    protected $id;
    protected $inTransitAt;
    protected $legacyResourceId;
    protected $location;
    protected $name;
    protected $order;
    protected $originAddress;
    protected $requiresShipping;
    protected $service;
    protected $status;
    protected $totalQuantity;
    protected $trackingInfo;
    protected $updatedAt;

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return Carbon
     */
    public function getDeliveredAt()
    {
        return $this->deliveredAt;
    }

    
    /**
     * @return FulfillmentDisplayStatusEnumObject
     */
    public function getDisplayStatus()
    {
        return $this->displayStatus;
    }

    
    /**
     * @return Carbon
     */
    public function getEstimatedDeliveryAt()
    {
        return $this->estimatedDeliveryAt;
    }

    
    /**
     * @return FulfillmentEventConnection
     */
    public function getEvents()
    {
        return $this->events;
    }

    
    /**
     * @return FulfillmentLineItemConnection
     */
    public function getFulfillmentLineItems()
    {
        return $this->fulfillmentLineItems;
    }

    
    /**
     * @return FulfillmentOrderConnection
     */
    public function getFulfillmentOrders()
    {
        return $this->fulfillmentOrders;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return Carbon
     */
    public function getInTransitAt()
    {
        return $this->inTransitAt;
    }

    
    /**
     * @return string
     */
    public function getLegacyResourceId()
    {
        return $this->legacyResourceId;
    }

    
    /**
     * @return Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    
    /**
     * @return FulfillmentOriginAddress
     */
    public function getOriginAddress()
    {
        return $this->originAddress;
    }

    
    /**
     * @return bool
     */
    public function getRequiresShipping()
    {
        return $this->requiresShipping;
    }

    
    /**
     * @return FulfillmentService
     */
    public function getService()
    {
        return $this->service;
    }

    
    /**
     * @return FulfillmentStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return int
     */
    public function getTotalQuantity()
    {
        return $this->totalQuantity;
    }

    
    /**
     * @return FulfillmentTrackingInfo[]
     */
    public function getTrackingInfo()
    {
        return $this->trackingInfo;
    }

    
    /**
     * @return Carbon
     */
    public function getUpdatedAt()
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
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['deliveredAt']) && $data['deliveredAt'] !== null) {
                $instance->deliveredAt = new Carbon($data['deliveredAt']);
            }
            if (isset($data['displayStatus']) && $data['displayStatus'] !== null) {
                $instance->displayStatus = $data['displayStatus'];
            }
            if (isset($data['estimatedDeliveryAt']) && $data['estimatedDeliveryAt'] !== null) {
                $instance->estimatedDeliveryAt = new Carbon($data['estimatedDeliveryAt']);
            }
            if (isset($data['events']) && $data['events'] !== null) {
                $instance->events = FulfillmentEventConnection::fromArray($data['events']);
            }
            if (isset($data['fulfillmentLineItems']) && $data['fulfillmentLineItems'] !== null) {
                $instance->fulfillmentLineItems = FulfillmentLineItemConnection::fromArray($data['fulfillmentLineItems']);
            }
            if (isset($data['fulfillmentOrders']) && $data['fulfillmentOrders'] !== null) {
                $instance->fulfillmentOrders = FulfillmentOrderConnection::fromArray($data['fulfillmentOrders']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['inTransitAt']) && $data['inTransitAt'] !== null) {
                $instance->inTransitAt = new Carbon($data['inTransitAt']);
            }
            if (isset($data['legacyResourceId']) && $data['legacyResourceId'] !== null) {
                $instance->legacyResourceId = $data['legacyResourceId'];
            }
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = Location::fromArray($data['location']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['order']) && $data['order'] !== null) {
                $instance->order = Order::fromArray($data['order']);
            }
            if (isset($data['originAddress']) && $data['originAddress'] !== null) {
                $instance->originAddress = FulfillmentOriginAddress::fromArray($data['originAddress']);
            }
            if (isset($data['requiresShipping']) && $data['requiresShipping'] !== null) {
                $instance->requiresShipping = $data['requiresShipping'];
            }
            if (isset($data['service']) && $data['service'] !== null) {
                $instance->service = FulfillmentService::fromArray($data['service']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['totalQuantity']) && $data['totalQuantity'] !== null) {
                $instance->totalQuantity = $data['totalQuantity'];
            }
            if (isset($data['trackingInfo']) && $data['trackingInfo'] !== null) {
                $instance->trackingInfo = array_map(function($item) { return FulfillmentTrackingInfo::fromArray($item); }, $data['trackingInfo']);
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
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->deliveredAt !== null) {
                $data['deliveredAt'] = $this->deliveredAt->toIso8601String();
            }
            if ($this->displayStatus !== null) {
                $data['displayStatus'] = $this->displayStatus;
            }
            if ($this->estimatedDeliveryAt !== null) {
                $data['estimatedDeliveryAt'] = $this->estimatedDeliveryAt->toIso8601String();
            }
            if ($this->events !== null) {
                $data['events'] = $this->events->asArray();
            }
            if ($this->fulfillmentLineItems !== null) {
                $data['fulfillmentLineItems'] = $this->fulfillmentLineItems->asArray();
            }
            if ($this->fulfillmentOrders !== null) {
                $data['fulfillmentOrders'] = $this->fulfillmentOrders->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->inTransitAt !== null) {
                $data['inTransitAt'] = $this->inTransitAt->toIso8601String();
            }
            if ($this->legacyResourceId !== null) {
                $data['legacyResourceId'] = $this->legacyResourceId;
            }
            if ($this->location !== null) {
                $data['location'] = $this->location->asArray();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->order !== null) {
                $data['order'] = $this->order->asArray();
            }
            if ($this->originAddress !== null) {
                $data['originAddress'] = $this->originAddress->asArray();
            }
            if ($this->requiresShipping !== null) {
                $data['requiresShipping'] = $this->requiresShipping;
            }
            if ($this->service !== null) {
                $data['service'] = $this->service->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->totalQuantity !== null) {
                $data['totalQuantity'] = $this->totalQuantity;
            }
            if ($this->trackingInfo !== null) {
                $data['trackingInfo'] = array_map(function($item) { return $item->asArray(); }, $this->trackingInfo);
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
