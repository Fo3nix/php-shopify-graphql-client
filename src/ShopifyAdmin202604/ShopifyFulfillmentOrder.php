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

/**
 * The FulfillmentOrder object represents either an item or a group of items in an
 * [Order](https://shopify.dev/api/admin-graphql/latest/objects/Order)
 * that are expected to be fulfilled from the same location.
 * There can be more than one fulfillment order for an
 * [order](https://shopify.dev/api/admin-graphql/latest/objects/Order)
 * at a given location.
 *
 * {{ '/api/reference/fulfillment_order_relationships.png' | image }}
 *
 * Fulfillment orders represent the work which is intended to be done in relation to an order.
 * When fulfillment has started for one or more line items, a
 * [Fulfillment](https://shopify.dev/api/admin-graphql/latest/objects/Fulfillment)
 * is created by a merchant or third party to represent the ongoing or completed work of fulfillment.
 *
 * [See below for more details on creating fulfillments](#the-lifecycle-of-a-fulfillment-order-at-a-location-which-is-managed-by-a-fulfillment-service).
 *
 * > Note:
 * > Shopify creates fulfillment orders automatically when an order is created.
 * > It is not possible to manually create fulfillment orders.
 * >
 * > [See below for more details on the lifecycle of a fulfillment order](#the-lifecycle-of-a-fulfillment-order).
 *
 * ## Retrieving fulfillment orders
 *
 * ### Fulfillment orders from an order
 *
 * All fulfillment orders related to a given order can be retrieved with the
 * [Order.fulfillmentOrders](https://shopify.dev/api/admin-graphql/latest/objects/Order#connection-order-fulfillmentorders)
 * connection.
 *
 * [API access scopes](#api-access-scopes)
 * govern which fulfillments orders are returned to clients.
 * An API client will only receive a subset of the fulfillment orders which belong to an order
 * if they don't have the necessary access scopes to view all of the fulfillment orders.
 *
 * ### Fulfillment orders assigned to the app for fulfillment
 *
 * Fulfillment service apps can retrieve the fulfillment orders which have been assigned to their locations with the
 * [assignedFulfillmentOrders](https://shopify.dev/api/admin-graphql/2024-07/objects/queryroot#connection-assignedfulfillmentorders)
 * connection.
 * Use the `assignmentStatus` argument to control whether all assigned fulfillment orders
 * should be returned or only those where a merchant has sent a
 * [fulfillment request](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentOrderMerchantRequest)
 * and it has yet to be responded to.
 *
 * The API client must be granted the `read_assigned_fulfillment_orders` access scope to access
 * the assigned fulfillment orders.
 *
 * ### All fulfillment orders
 *
 * Apps can retrieve all fulfillment orders with the
 * [fulfillmentOrders](https://shopify.dev/api/admin-graphql/latest/queries/fulfillmentOrders)
 * query. This query returns all assigned, merchant-managed, and third-party fulfillment orders on the shop,
 * which are accessible to the app according to the
 * [fulfillment order access scopes](#api-access-scopes) it was granted with.
 *
 * ## The lifecycle of a fulfillment order
 *
 * ### Fulfillment Order Creation
 *
 * After an order is created, a background worker performs the order routing process which determines
 * which locations will be responsible for fulfilling the purchased items.
 * Once the order routing process is complete, one or more fulfillment orders will be created
 * and assigned to these locations. It is not possible to manually create fulfillment orders.
 *
 * Once a fulfillment order has been created, it will have one of two different lifecycles depending on
 * the type of location which the fulfillment order is assigned to.
 *
 * ### The lifecycle of a fulfillment order at a merchant managed location
 *
 * Fulfillment orders are completed by creating
 * [fulfillments](https://shopify.dev/api/admin-graphql/latest/objects/Fulfillment).
 * Fulfillments represents the work done.
 *
 * For digital products a merchant or an order management app would create a fulfilment once the digital asset
 * has been provisioned.
 * For example, in the case of a digital gift card, a merchant would to do this once
 * the gift card has been activated - before the email has been shipped.
 *
 * On the other hand, for a traditional shipped order,
 * a merchant or an order management app would create a fulfillment after picking and packing the items relating
 * to a fulfillment order, but before the courier has collected the goods.
 *
 * [Learn about managing fulfillment orders as an order management app](https://shopify.dev/apps/fulfillment/order-management-apps/manage-fulfillments).
 *
 * ### The lifecycle of a fulfillment order at a location which is managed by a fulfillment service
 *
 * For fulfillment orders which are assigned to a location that is managed by a fulfillment service,
 * a merchant or an Order Management App can
 * [send a fulfillment request](https://shopify.dev/api/admin-graphql/latest/mutations/fulfillmentOrderSubmitFulfillmentRequest)
 * to the fulfillment service which operates the location to request that they fulfill the associated items.
 * A fulfillment service has the option to
 * [accept](https://shopify.dev/api/admin-graphql/latest/mutations/fulfillmentOrderAcceptFulfillmentRequest)
 * or [reject](https://shopify.dev/api/admin-graphql/latest/mutations/fulfillmentOrderRejectFulfillmentRequest)
 * this fulfillment request.
 *
 * Once the fulfillment service has accepted the request, the request can no longer be cancelled by the merchant
 * or order management app and instead a
 * [cancellation request must be submitted](https://shopify.dev/api/admin-graphql/latest/mutations/fulfillmentOrderSubmitCancellationRequest)
 * to the fulfillment service.
 *
 * Once a fulfillment service accepts a fulfillment request,
 * then after they are ready to pack items and send them for delivery, they create fulfillments with the
 * [fulfillmentCreate](https://shopify.dev/api/admin-graphql/unstable/mutations/fulfillmentCreate)
 * mutation.
 * They can provide tracking information right away or create fulfillments without it and then
 * update the tracking information for fulfillments with the
 * [fulfillmentTrackingInfoUpdate](https://shopify.dev/api/admin-graphql/unstable/mutations/fulfillmentTrackingInfoUpdate)
 * mutation.
 *
 * [Learn about managing fulfillment orders as a fulfillment service](https://shopify.dev/apps/fulfillment/fulfillment-service-apps/manage-fulfillments).
 *
 * ## API access scopes
 *
 * Fulfillment orders are governed by the following API access scopes:
 *
 * * The `read_merchant_managed_fulfillment_orders` and
 *   `write_merchant_managed_fulfillment_orders` access scopes
 *   grant access to fulfillment orders assigned to merchant-managed locations.
 * * The `read_assigned_fulfillment_orders` and `write_assigned_fulfillment_orders`
 *   access scopes are intended for fulfillment services.
 *   These scopes grant access to fulfillment orders assigned to locations that are being managed
 *   by fulfillment services.
 * * The `read_third_party_fulfillment_orders` and `write_third_party_fulfillment_orders`
 *   access scopes grant access to fulfillment orders
 *   assigned to locations managed by other fulfillment services.
 *
 * ### Fulfillment service app access scopes
 *
 * Usually, **fulfillment services** have the `write_assigned_fulfillment_orders` access scope
 * and don't have the `*_third_party_fulfillment_orders`
 * or `*_merchant_managed_fulfillment_orders` access scopes.
 * The app will only have access to the fulfillment orders assigned to their location
 * (or multiple locations if the app registers multiple fulfillment services on the shop).
 * The app will not have access to fulfillment orders assigned to merchant-managed locations
 * or locations owned by other fulfillment service apps.
 *
 * ### Order management app access scopes
 *
 * **Order management apps** will usually request `write_merchant_managed_fulfillment_orders` and
 * `write_third_party_fulfillment_orders` access scopes. This will allow them to manage all fulfillment orders
 * on behalf of a merchant.
 *
 * If an app combines the functions of an order management app and a fulfillment service,
 * then the app should request all
 * access scopes to manage all assigned and all unassigned fulfillment orders.
 *
 * ## Notifications about fulfillment orders
 *
 * Fulfillment services are required to
 * [register](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentService)
 * a self-hosted callback URL which has a number of uses. One of these uses is that this callback URL will be notified
 * whenever a merchant submits a fulfillment or cancellation request.
 *
 * Both merchants and apps can
 * [subscribe](https://shopify.dev/apps/fulfillment/fulfillment-service-apps/manage-fulfillments#webhooks)
 * to the
 * [fulfillment order webhooks](https://shopify.dev/api/admin-graphql/latest/enums/WebhookSubscriptionTopic#value-fulfillmentorderscancellationrequestaccepted)
 * to be notified whenever fulfillment order related domain events occur.
 *
 * [Learn about fulfillment workflows](https://shopify.dev/apps/fulfillment).
 */
class ShopifyFulfillmentOrder implements ShopifyNode
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
     * The fulfillment order's assigned location. This is the location where the fulfillment is expected to happen.
     *
     * The fulfillment order's assigned location might change in the following cases:
     *
     * - The fulfillment order has been entirely moved to a new location. For example, the [fulfillmentOrderMove](
     *   https://shopify.dev/api/admin-graphql/latest/mutations/fulfillmentOrderMove
     *   ) mutation has been called, and you see the original fulfillment order in the [movedFulfillmentOrder](
     *   https://shopify.dev/api/admin-graphql/latest/mutations/fulfillmentOrderMove#field-fulfillmentordermovepayload-movedfulfillmentorder
     *   ) field within the mutation's response.
     * - Work on the fulfillment order hasn't yet begun, which means that the fulfillment order has the
     *     [OPEN](https://shopify.dev/api/admin-graphql/latest/enums/FulfillmentOrderStatus#value-open),
     *     [SCHEDULED](https://shopify.dev/api/admin-graphql/latest/enums/FulfillmentOrderStatus#value-scheduled), or
     *     [ON_HOLD](https://shopify.dev/api/admin-graphql/latest/enums/FulfillmentOrderStatus#value-onhold)
     *     status, and the shop's location properties might be undergoing edits (for example, in the Shopify admin).
     *
     * @return ShopifyFulfillmentOrderAssignedLocation
     */
    public function getAssignedLocation(): ?ShopifyFulfillmentOrderAssignedLocation
    {
        return $this->assignedLocation;
    }

    
    /**
     * ID of the channel that created the order.
     *
     * @return string
     */
    public function getChannelId(): ?string
    {
        return $this->channelId;
    }

    
    /**
     * Date and time when the fulfillment order was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * Delivery method of this fulfillment order.
     *
     * @return ShopifyDeliveryMethod
     */
    public function getDeliveryMethod(): ?ShopifyDeliveryMethod
    {
        return $this->deliveryMethod;
    }

    
    /**
     * The destination where the items should be sent.
     *
     * @return ShopifyFulfillmentOrderDestination
     */
    public function getDestination(): ?ShopifyFulfillmentOrderDestination
    {
        return $this->destination;
    }

    
    /**
     * The date and time at which the fulfillment order will be fulfillable. When this date and time is reached, the scheduled fulfillment order is automatically transitioned to open. For example, the `fulfill_at` date for a subscription order might be the 1st of each month, a pre-order `fulfill_at` date would be `nil`, and a standard order `fulfill_at` date would be the order creation date.
     *
     * @return Carbon
     */
    public function getFulfillAt(): ?Carbon
    {
        return $this->fulfillAt;
    }

    
    /**
     * The latest date and time by which all items in the fulfillment order need to be fulfilled.
     *
     * @return Carbon
     */
    public function getFulfillBy(): ?Carbon
    {
        return $this->fulfillBy;
    }

    
    /**
     * The fulfillment holds applied on the fulfillment order.
     *
     * @return ShopifyFulfillmentHold[]
     */
    public function getFulfillmentHolds(): ?array
    {
        return $this->fulfillmentHolds;
    }

    
    /**
     * Fulfillment orders eligible for merging with the given fulfillment order.
     *
     * @return ShopifyFulfillmentOrderConnection
     */
    public function getFulfillmentOrdersForMerge(): ?ShopifyFulfillmentOrderConnection
    {
        return $this->fulfillmentOrdersForMerge;
    }

    
    /**
     * A list of fulfillments for the fulfillment order.
     *
     * @return ShopifyFulfillmentConnection
     */
    public function getFulfillments(): ?ShopifyFulfillmentConnection
    {
        return $this->fulfillments;
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
     * The duties delivery method of this fulfillment order.
     *
     * @return ShopifyFulfillmentOrderInternationalDuties
     */
    public function getInternationalDuties(): ?ShopifyFulfillmentOrderInternationalDuties
    {
        return $this->internationalDuties;
    }

    
    /**
     * A list of the fulfillment order's line items.
     *
     * @return ShopifyFulfillmentOrderLineItemConnection
     */
    public function getLineItems(): ?ShopifyFulfillmentOrderLineItemConnection
    {
        return $this->lineItems;
    }

    
    /**
     * A list of locations that the fulfillment order can potentially move to.
     *
     * @return ShopifyFulfillmentOrderLocationForMoveConnection
     */
    public function getLocationsForMove(): ?ShopifyFulfillmentOrderLocationForMoveConnection
    {
        return $this->locationsForMove;
    }

    
    /**
     * A list of requests sent by the merchant or an order management app to the fulfillment service for the fulfillment order.
     *
     * @return ShopifyFulfillmentOrderMerchantRequestConnection
     */
    public function getMerchantRequests(): ?ShopifyFulfillmentOrderMerchantRequestConnection
    {
        return $this->merchantRequests;
    }

    
    /**
     * The order that's associated with the fulfillment order.
     *
     * @return ShopifyOrder
     */
    public function getOrder(): ?ShopifyOrder
    {
        return $this->order;
    }

    
    /**
     * ID of the order that's associated with the fulfillment order.
     *
     * @return string
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    
    /**
     * The unique identifier for the order that appears on the order page in the Shopify admin and the <b>Order status</b> page.
     * For example, "#1001", "EN1001", or "1001-A".
     * This value isn't unique across multiple stores.
     *
     * @return string
     */
    public function getOrderName(): ?string
    {
        return $this->orderName;
    }

    
    /**
     * The date and time when the order was processed.
     * This date and time might not match the date and time when the order was created.
     *
     * @return Carbon
     */
    public function getOrderProcessedAt(): ?Carbon
    {
        return $this->orderProcessedAt;
    }

    
    /**
     * The total weight of all line items in the fulfillment order that aren't yet fulfilled.
     *
     * @return ShopifyWeight
     */
    public function getRemainingLineItemsWeight(): ?ShopifyWeight
    {
        return $this->remainingLineItemsWeight;
    }

    
    /**
     * The request status of the fulfillment order.
     *
     * @return string A ShopifyFulfillmentOrderRequestStatusEnumObject value
     */
    public function getRequestStatus(): ?string
    {
        return $this->requestStatus;
    }

    
    /**
     * The status of the fulfillment order.
     *
     * @return string A ShopifyFulfillmentOrderStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * The actions that can be performed on this fulfillment order.
     *
     * @return ShopifyFulfillmentOrderSupportedAction[]
     */
    public function getSupportedActions(): ?array
    {
        return $this->supportedActions;
    }

    
    /**
     * The date and time when the fulfillment order was last updated.
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
