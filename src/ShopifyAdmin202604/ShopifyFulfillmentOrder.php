<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFulfillmentOrderAssignedLocation;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDeliveryMethod;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFulfillmentOrderDestination;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFulfillmentHold;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFulfillmentOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFulfillmentConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFulfillmentOrderInternationalDuties;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFulfillmentOrderLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFulfillmentOrderLocationForMoveConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFulfillmentOrderMerchantRequestConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyWeight;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFulfillmentOrderSupportedAction;

class ShopifyFulfillmentOrder
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
    protected $remainingLineItemsWeight;
    protected $requestStatus;
    protected $status;
    protected $supportedActions;
    protected $updatedAt;

    
    /**
     * @return ShopifyFulfillmentOrderAssignedLocation
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
     * @return ShopifyDeliveryMethod
     */
    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    
    /**
     * @return ShopifyFulfillmentOrderDestination
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
     * @return ShopifyFulfillmentHold[]
     */
    public function getFulfillmentHolds()
    {
        return $this->fulfillmentHolds;
    }

    
    /**
     * @return ShopifyFulfillmentOrderConnection
     */
    public function getFulfillmentOrdersForMerge()
    {
        return $this->fulfillmentOrdersForMerge;
    }

    
    /**
     * @return ShopifyFulfillmentConnection
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
     * @return ShopifyFulfillmentOrderInternationalDuties
     */
    public function getInternationalDuties()
    {
        return $this->internationalDuties;
    }

    
    /**
     * @return ShopifyFulfillmentOrderLineItemConnection
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    
    /**
     * @return ShopifyFulfillmentOrderLocationForMoveConnection
     */
    public function getLocationsForMove()
    {
        return $this->locationsForMove;
    }

    
    /**
     * @return ShopifyFulfillmentOrderMerchantRequestConnection
     */
    public function getMerchantRequests()
    {
        return $this->merchantRequests;
    }

    
    /**
     * @return ShopifyOrder
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
     * @return ShopifyWeight
     */
    public function getRemainingLineItemsWeight()
    {
        return $this->remainingLineItemsWeight;
    }

    
    /**
     * @return ShopifyFulfillmentOrderRequestStatusEnumObject
     */
    public function getRequestStatus()
    {
        return $this->requestStatus;
    }

    
    /**
     * @return ShopifyFulfillmentOrderStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return ShopifyFulfillmentOrderSupportedAction[]
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
                $instance->assignedLocation = ShopifyFulfillmentOrderAssignedLocation::fromArray($data['assignedLocation']);
            }
            if (isset($data['channelId']) && $data['channelId'] !== null) {
                $instance->channelId = $data['channelId'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['deliveryMethod']) && $data['deliveryMethod'] !== null) {
                $instance->deliveryMethod = ShopifyDeliveryMethod::fromArray($data['deliveryMethod']);
            }
            if (isset($data['destination']) && $data['destination'] !== null) {
                $instance->destination = ShopifyFulfillmentOrderDestination::fromArray($data['destination']);
            }
            if (isset($data['fulfillAt']) && $data['fulfillAt'] !== null) {
                $instance->fulfillAt = new Carbon($data['fulfillAt']);
            }
            if (isset($data['fulfillBy']) && $data['fulfillBy'] !== null) {
                $instance->fulfillBy = new Carbon($data['fulfillBy']);
            }
            if (isset($data['fulfillmentHolds']) && $data['fulfillmentHolds'] !== null) {
                $instance->fulfillmentHolds = array_map(function($item) { return ShopifyFulfillmentHold::fromArray($item); }, $data['fulfillmentHolds']);
            }
            if (isset($data['fulfillmentOrdersForMerge']) && $data['fulfillmentOrdersForMerge'] !== null) {
                $instance->fulfillmentOrdersForMerge = ShopifyFulfillmentOrderConnection::fromArray($data['fulfillmentOrdersForMerge']);
            }
            if (isset($data['fulfillments']) && $data['fulfillments'] !== null) {
                $instance->fulfillments = ShopifyFulfillmentConnection::fromArray($data['fulfillments']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['internationalDuties']) && $data['internationalDuties'] !== null) {
                $instance->internationalDuties = ShopifyFulfillmentOrderInternationalDuties::fromArray($data['internationalDuties']);
            }
            if (isset($data['lineItems']) && $data['lineItems'] !== null) {
                $instance->lineItems = ShopifyFulfillmentOrderLineItemConnection::fromArray($data['lineItems']);
            }
            if (isset($data['locationsForMove']) && $data['locationsForMove'] !== null) {
                $instance->locationsForMove = ShopifyFulfillmentOrderLocationForMoveConnection::fromArray($data['locationsForMove']);
            }
            if (isset($data['merchantRequests']) && $data['merchantRequests'] !== null) {
                $instance->merchantRequests = ShopifyFulfillmentOrderMerchantRequestConnection::fromArray($data['merchantRequests']);
            }
            if (isset($data['order']) && $data['order'] !== null) {
                $instance->order = ShopifyOrder::fromArray($data['order']);
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
            if (isset($data['remainingLineItemsWeight']) && $data['remainingLineItemsWeight'] !== null) {
                $instance->remainingLineItemsWeight = ShopifyWeight::fromArray($data['remainingLineItemsWeight']);
            }
            if (isset($data['requestStatus']) && $data['requestStatus'] !== null) {
                $instance->requestStatus = $data['requestStatus'];
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['supportedActions']) && $data['supportedActions'] !== null) {
                $instance->supportedActions = array_map(function($item) { return ShopifyFulfillmentOrderSupportedAction::fromArray($item); }, $data['supportedActions']);
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
            if ($this->remainingLineItemsWeight !== null) {
                $data['remainingLineItemsWeight'] = $this->remainingLineItemsWeight->asArray();
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
