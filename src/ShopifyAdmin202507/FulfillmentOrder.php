<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentOrderAssignedLocation;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DeliveryMethod;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentOrderDestination;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentHold;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentOrderInternationalDuties;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentOrderLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentOrderLocationForMoveConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentOrderMerchantRequestConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Order;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentOrderSupportedAction;

class FulfillmentOrder
{
    protected $assignedLocation;
    protected $channelId;
    protected $createdAt;
    protected $deliveryMethod;
    protected $destination;
    protected $fulfillAt;
    protected $fulfillBy;
    protected $fulfillmentHolds;
    protected $fulfillmentOrdersForMerge;
    protected $fulfillments;
    protected $id;
    protected $internationalDuties;
    protected $lineItems;
    protected $locationsForMove;
    protected $merchantRequests;
    protected $order;
    protected $orderId;
    protected $orderName;
    protected $orderProcessedAt;
    protected $requestStatus;
    protected $status;
    protected $supportedActions;
    protected $updatedAt;

    
    /**
     * @return FulfillmentOrderAssignedLocation
     */
    public function getAssignedLocation()
    {
        return $this->assignedLocation;
    }

    
    /**
     * @return string
     */
    public function getChannelId()
    {
        return $this->channelId;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return DeliveryMethod
     */
    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    
    /**
     * @return FulfillmentOrderDestination
     */
    public function getDestination()
    {
        return $this->destination;
    }

    
    /**
     * @return Carbon
     */
    public function getFulfillAt()
    {
        return $this->fulfillAt;
    }

    
    /**
     * @return Carbon
     */
    public function getFulfillBy()
    {
        return $this->fulfillBy;
    }

    
    /**
     * @return FulfillmentHold[]
     */
    public function getFulfillmentHolds()
    {
        return $this->fulfillmentHolds;
    }

    
    /**
     * @return FulfillmentOrderConnection
     */
    public function getFulfillmentOrdersForMerge()
    {
        return $this->fulfillmentOrdersForMerge;
    }

    
    /**
     * @return FulfillmentConnection
     */
    public function getFulfillments()
    {
        return $this->fulfillments;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return FulfillmentOrderInternationalDuties
     */
    public function getInternationalDuties()
    {
        return $this->internationalDuties;
    }

    
    /**
     * @return FulfillmentOrderLineItemConnection
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    
    /**
     * @return FulfillmentOrderLocationForMoveConnection
     */
    public function getLocationsForMove()
    {
        return $this->locationsForMove;
    }

    
    /**
     * @return FulfillmentOrderMerchantRequestConnection
     */
    public function getMerchantRequests()
    {
        return $this->merchantRequests;
    }

    
    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    
    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    
    /**
     * @return string
     */
    public function getOrderName()
    {
        return $this->orderName;
    }

    
    /**
     * @return Carbon
     */
    public function getOrderProcessedAt()
    {
        return $this->orderProcessedAt;
    }

    
    /**
     * @return FulfillmentOrderRequestStatusEnumObject
     */
    public function getRequestStatus()
    {
        return $this->requestStatus;
    }

    
    /**
     * @return FulfillmentOrderStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return FulfillmentOrderSupportedAction[]
     */
    public function getSupportedActions()
    {
        return $this->supportedActions;
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
            if (isset($data['assignedLocation']) && $data['assignedLocation'] !== null) {
                $instance->assignedLocation = FulfillmentOrderAssignedLocation::fromArray($data['assignedLocation']);
            }
            if (isset($data['channelId']) && $data['channelId'] !== null) {
                $instance->channelId = $data['channelId'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['deliveryMethod']) && $data['deliveryMethod'] !== null) {
                $instance->deliveryMethod = DeliveryMethod::fromArray($data['deliveryMethod']);
            }
            if (isset($data['destination']) && $data['destination'] !== null) {
                $instance->destination = FulfillmentOrderDestination::fromArray($data['destination']);
            }
            if (isset($data['fulfillAt']) && $data['fulfillAt'] !== null) {
                $instance->fulfillAt = new Carbon($data['fulfillAt']);
            }
            if (isset($data['fulfillBy']) && $data['fulfillBy'] !== null) {
                $instance->fulfillBy = new Carbon($data['fulfillBy']);
            }
            if (isset($data['fulfillmentHolds']) && $data['fulfillmentHolds'] !== null) {
                $instance->fulfillmentHolds = array_map(function($item) { return FulfillmentHold::fromArray($item); }, $data['fulfillmentHolds']);
            }
            if (isset($data['fulfillmentOrdersForMerge']) && $data['fulfillmentOrdersForMerge'] !== null) {
                $instance->fulfillmentOrdersForMerge = FulfillmentOrderConnection::fromArray($data['fulfillmentOrdersForMerge']);
            }
            if (isset($data['fulfillments']) && $data['fulfillments'] !== null) {
                $instance->fulfillments = FulfillmentConnection::fromArray($data['fulfillments']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['internationalDuties']) && $data['internationalDuties'] !== null) {
                $instance->internationalDuties = FulfillmentOrderInternationalDuties::fromArray($data['internationalDuties']);
            }
            if (isset($data['lineItems']) && $data['lineItems'] !== null) {
                $instance->lineItems = FulfillmentOrderLineItemConnection::fromArray($data['lineItems']);
            }
            if (isset($data['locationsForMove']) && $data['locationsForMove'] !== null) {
                $instance->locationsForMove = FulfillmentOrderLocationForMoveConnection::fromArray($data['locationsForMove']);
            }
            if (isset($data['merchantRequests']) && $data['merchantRequests'] !== null) {
                $instance->merchantRequests = FulfillmentOrderMerchantRequestConnection::fromArray($data['merchantRequests']);
            }
            if (isset($data['order']) && $data['order'] !== null) {
                $instance->order = Order::fromArray($data['order']);
            }
            if (isset($data['orderId']) && $data['orderId'] !== null) {
                $instance->orderId = $data['orderId'];
            }
            if (isset($data['orderName']) && $data['orderName'] !== null) {
                $instance->orderName = $data['orderName'];
            }
            if (isset($data['orderProcessedAt']) && $data['orderProcessedAt'] !== null) {
                $instance->orderProcessedAt = new Carbon($data['orderProcessedAt']);
            }
            if (isset($data['requestStatus']) && $data['requestStatus'] !== null) {
                $instance->requestStatus = $data['requestStatus'];
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['supportedActions']) && $data['supportedActions'] !== null) {
                $instance->supportedActions = array_map(function($item) { return FulfillmentOrderSupportedAction::fromArray($item); }, $data['supportedActions']);
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
            if ($this->assignedLocation !== null) {
                $data['assignedLocation'] = $this->assignedLocation->asArray();
            }
            if ($this->channelId !== null) {
                $data['channelId'] = $this->channelId;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->deliveryMethod !== null) {
                $data['deliveryMethod'] = $this->deliveryMethod->asArray();
            }
            if ($this->destination !== null) {
                $data['destination'] = $this->destination->asArray();
            }
            if ($this->fulfillAt !== null) {
                $data['fulfillAt'] = $this->fulfillAt->toIso8601String();
            }
            if ($this->fulfillBy !== null) {
                $data['fulfillBy'] = $this->fulfillBy->toIso8601String();
            }
            if ($this->fulfillmentHolds !== null) {
                $data['fulfillmentHolds'] = array_map(function($item) { return $item->asArray(); }, $this->fulfillmentHolds);
            }
            if ($this->fulfillmentOrdersForMerge !== null) {
                $data['fulfillmentOrdersForMerge'] = $this->fulfillmentOrdersForMerge->asArray();
            }
            if ($this->fulfillments !== null) {
                $data['fulfillments'] = $this->fulfillments->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->internationalDuties !== null) {
                $data['internationalDuties'] = $this->internationalDuties->asArray();
            }
            if ($this->lineItems !== null) {
                $data['lineItems'] = $this->lineItems->asArray();
            }
            if ($this->locationsForMove !== null) {
                $data['locationsForMove'] = $this->locationsForMove->asArray();
            }
            if ($this->merchantRequests !== null) {
                $data['merchantRequests'] = $this->merchantRequests->asArray();
            }
            if ($this->order !== null) {
                $data['order'] = $this->order->asArray();
            }
            if ($this->orderId !== null) {
                $data['orderId'] = $this->orderId;
            }
            if ($this->orderName !== null) {
                $data['orderName'] = $this->orderName;
            }
            if ($this->orderProcessedAt !== null) {
                $data['orderProcessedAt'] = $this->orderProcessedAt->toIso8601String();
            }
            if ($this->requestStatus !== null) {
                $data['requestStatus'] = $this->requestStatus;
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->supportedActions !== null) {
                $data['supportedActions'] = array_map(function($item) { return $item->asArray(); }, $this->supportedActions);
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
