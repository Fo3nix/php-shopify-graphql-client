<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyFulfillmentEventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyFulfillmentLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyFulfillmentOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyFulfillmentOriginAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyFulfillmentService;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyShippingLabel;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyFulfillmentTrackingInfo;

/**
 * A shipment of one or more items from an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order). Tracks which [`LineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem) objects ship, their quantities, and the shipment's tracking information.
 *
 * Includes tracking details such as the carrier, tracking numbers, and URLs. The fulfillment connects to both the original order and any associated [`FulfillmentOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentOrder) objects. [`FulfillmentEvent`](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentEvent) objects record milestones throughout the shipment lifecycle, from creation through delivery.
 *
 * Multiple fulfillments can exist for a single order when items either ship separately or from different locations.
 */
class ShopifyFulfillment implements ShopifyLegacyInteroperability, ShopifyNode
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
    protected $shippingLabel;
    protected $status;
    protected $totalQuantity;
    protected $trackingInfo;
    protected $updatedAt;

    
    /**
     * The date and time when the fulfillment was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The date that this fulfillment was delivered.
     *
     * @return Carbon
     */
    public function getDeliveredAt(): ?Carbon
    {
        return $this->deliveredAt;
    }

    
    /**
     * Human readable display status for this fulfillment.
     *
     * @return string A ShopifyFulfillmentDisplayStatusEnumObject value
     */
    public function getDisplayStatus(): ?string
    {
        return $this->displayStatus;
    }

    
    /**
     * The estimated date that this fulfillment will arrive.
     *
     * @return Carbon
     */
    public function getEstimatedDeliveryAt(): ?Carbon
    {
        return $this->estimatedDeliveryAt;
    }

    
    /**
     * The history of events associated with this fulfillment.
     *
     * @return ShopifyFulfillmentEventConnection
     */
    public function getEvents(): ?ShopifyFulfillmentEventConnection
    {
        return $this->events;
    }

    
    /**
     * List of the fulfillment's line items.
     *
     * @return ShopifyFulfillmentLineItemConnection
     */
    public function getFulfillmentLineItems(): ?ShopifyFulfillmentLineItemConnection
    {
        return $this->fulfillmentLineItems;
    }

    
    /**
     * A paginated list of fulfillment orders for the fulfillment.
     *
     * @return ShopifyFulfillmentOrderConnection
     */
    public function getFulfillmentOrders(): ?ShopifyFulfillmentOrderConnection
    {
        return $this->fulfillmentOrders;
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
     * The date and time when the fulfillment went into transit.
     *
     * @return Carbon
     */
    public function getInTransitAt(): ?Carbon
    {
        return $this->inTransitAt;
    }

    
    /**
     * The ID of the corresponding resource in the REST Admin API.
     *
     * @return string
     */
    public function getLegacyResourceId(): mixed
    {
        return $this->legacyResourceId;
    }

    
    /**
     * The location that the fulfillment was processed at.
     *
     * @return ShopifyLocation
     */
    public function getLocation(): ?ShopifyLocation
    {
        return $this->location;
    }

    
    /**
     * Human readable reference identifier for this fulfillment.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The order for which the fulfillment was created.
     *
     * @return ShopifyOrder
     */
    public function getOrder(): ?ShopifyOrder
    {
        return $this->order;
    }

    
    /**
     * The address at which the fulfillment occurred. This field is intended for tax purposes, as a full address is required for tax providers to accurately calculate taxes. Typically this is the address of the warehouse or fulfillment center. To retrieve a fulfillment location's address, use the `assignedLocation` field on the [`FulfillmentOrder`](/docs/api/admin-graphql/latest/objects/FulfillmentOrder) object instead.
     *
     * @return ShopifyFulfillmentOriginAddress
     */
    public function getOriginAddress(): ?ShopifyFulfillmentOriginAddress
    {
        return $this->originAddress;
    }

    
    /**
     * Whether any of the line items in the fulfillment require shipping.
     *
     * @return bool
     */
    public function getRequiresShipping(): ?bool
    {
        return $this->requiresShipping;
    }

    
    /**
     * Fulfillment service associated with the fulfillment.
     *
     * @return ShopifyFulfillmentService
     */
    public function getService(): ?ShopifyFulfillmentService
    {
        return $this->service;
    }

    
    /**
     * The optional shipping label for this fulfillment.
     *
     * @return ShopifyShippingLabel
     */
    public function getShippingLabel(): ?ShopifyShippingLabel
    {
        return $this->shippingLabel;
    }

    
    /**
     * The status of the fulfillment.
     *
     * @return string A ShopifyFulfillmentStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * Sum of all line item quantities for the fulfillment.
     *
     * @return int
     */
    public function getTotalQuantity(): ?int
    {
        return $this->totalQuantity;
    }

    
    /**
     * Tracking information associated with the fulfillment,
     * such as the tracking company, tracking number, and tracking URL.
     *
     * @return ShopifyFulfillmentTrackingInfo[]
     */
    public function getTrackingInfo(): ?array
    {
        return $this->trackingInfo;
    }

    
    /**
     * The date and time when the fulfillment was last modified.
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
                $instance->events = ShopifyFulfillmentEventConnection::fromArray($data['events']);
            }
            if (isset($data['fulfillmentLineItems']) && $data['fulfillmentLineItems'] !== null) {
                $instance->fulfillmentLineItems = ShopifyFulfillmentLineItemConnection::fromArray($data['fulfillmentLineItems']);
            }
            if (isset($data['fulfillmentOrders']) && $data['fulfillmentOrders'] !== null) {
                $instance->fulfillmentOrders = ShopifyFulfillmentOrderConnection::fromArray($data['fulfillmentOrders']);
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
                $instance->location = ShopifyLocation::fromArray($data['location']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['order']) && $data['order'] !== null) {
                $instance->order = ShopifyOrder::fromArray($data['order']);
            }
            if (isset($data['originAddress']) && $data['originAddress'] !== null) {
                $instance->originAddress = ShopifyFulfillmentOriginAddress::fromArray($data['originAddress']);
            }
            if (isset($data['requiresShipping']) && $data['requiresShipping'] !== null) {
                $instance->requiresShipping = $data['requiresShipping'];
            }
            if (isset($data['service']) && $data['service'] !== null) {
                $instance->service = ShopifyFulfillmentService::fromArray($data['service']);
            }
            if (isset($data['shippingLabel']) && $data['shippingLabel'] !== null) {
                $instance->shippingLabel = ShopifyShippingLabel::fromArray($data['shippingLabel']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['totalQuantity']) && $data['totalQuantity'] !== null) {
                $instance->totalQuantity = $data['totalQuantity'];
            }
            if (isset($data['trackingInfo']) && $data['trackingInfo'] !== null) {
                $instance->trackingInfo = array_map(function($item) { return ShopifyFulfillmentTrackingInfo::fromArray($item); }, $data['trackingInfo']);
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
            if ($this->shippingLabel !== null) {
                $data['shippingLabel'] = $this->shippingLabel->asArray();
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
