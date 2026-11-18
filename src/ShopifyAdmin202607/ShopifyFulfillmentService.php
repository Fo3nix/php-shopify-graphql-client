<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyLocation;

/**
 * A **Fulfillment Service** is a third party warehouse that prepares and ships orders
 * on behalf of the store owner. Fulfillment services charge a fee to package and ship items
 * and update product inventory levels. Some well known fulfillment services with Shopify integrations
 * include: Amazon, Shipwire, and Rakuten. When an app registers a new `FulfillmentService` on a store,
 * Shopify automatically creates a `Location` that's associated to the fulfillment service.
 * To learn more about fulfillment services, refer to
 * [Manage fulfillments as a fulfillment service app](https://shopify.dev/apps/fulfillment/fulfillment-service-apps)
 * guide.
 *
 * ## Mutations
 *
 * You can work with the `FulfillmentService` object with the
 * [fulfillmentServiceCreate](https://shopify.dev/api/admin-graphql/latest/mutations/fulfillmentServiceCreate),
 * [fulfillmentServiceUpdate](https://shopify.dev/api/admin-graphql/latest/mutations/fulfillmentServiceUpdate),
 * and [fulfillmentServiceDelete](https://shopify.dev/api/admin-graphql/latest/mutations/fulfillmentServiceDelete)
 * mutations.
 *
 * ## Hosted endpoints
 *
 * Fulfillment service providers integrate with Shopify by providing Shopify with a set of hosted endpoints that
 * Shopify can query on certain conditions.
 * These endpoints must have a common prefix, and this prefix should be supplied in the `callbackUrl` parameter
 * in the
 * [fulfillmentServiceCreate](https://shopify.dev/api/admin-graphql/latest/mutations/fulfillmentServiceCreate)
 * mutation.
 *
 * - Shopify sends POST requests to the `<callbackUrl>/fulfillment_order_notification` endpoint
 *   to notify the fulfillment service about fulfillment requests and fulfillment cancellation requests.
 *
 *   For more information, refer to
 *   [Receive fulfillment requests and cancellations](https://shopify.dev/apps/fulfillment/fulfillment-service-apps/manage-fulfillments#step-2-receive-fulfillment-requests-and-cancellations).
 * - Shopify sends GET requests to the `<callbackUrl>/fetch_tracking_numbers` endpoint to retrieve tracking numbers for orders
 *   if `trackingSupport` is set to `true`.
 *
 *   For more information, refer to
 *   [Enable tracking support](https://shopify.dev/apps/fulfillment/fulfillment-service-apps/manage-fulfillments#step-8-enable-tracking-support-optional).
 *
 *   Fulfillment services can also update tracking information using the
 *   [fulfillmentTrackingInfoUpdate](https://shopify.dev/api/admin-graphql/latest/mutations/fulfillmentTrackingInfoUpdate) mutation,
 *   rather than waiting for Shopify to ask for tracking numbers.
 * - Shopify sends GET requests to the `<callbackUrl>/fetch_stock` endpoint to retrieve
 *   on hand inventory levels for the fulfillment service location if `inventoryManagement` is set to `true`.
 *
 *   For more information, refer to
 *   [Sharing inventory levels with Shopify](https://shopify.dev/apps/build/orders-fulfillment/fulfillment-service-apps/build-for-fulfillment-services#step-10-optional-share-inventory-levels-with-shopify).
 *
 * To make sure you have everything set up correctly, you can test the `callbackUrl`-prefixed endpoints
 * in your development store.
 *
 * ## Resources and webhooks
 *
 * There are a variety of objects and webhooks that enable a fulfillment service to work.
 * To exchange fulfillment information with Shopify, fulfillment services use the
 * [FulfillmentOrder](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentOrder),
 * [Fulfillment](https://shopify.dev/api/admin-graphql/latest/objects/Fulfillment) and
 * [Order](https://shopify.dev/api/admin-graphql/latest/objects/Order) objects and related mutations.
 * To act on fulfillment process events that happen on the Shopify side,
 * besides awaiting calls to `callbackUrl`-prefixed endpoints,
 * fulfillment services can subscribe to the
 * [fulfillment order](https://shopify.dev/apps/fulfillment/fulfillment-service-apps/manage-fulfillments#webhooks)
 * and [order](https://shopify.dev/api/admin-rest/latest/resources/webhook)
 * webhooks.
 */
class ShopifyFulfillmentService
{
    protected $callbackUrl;
    protected $createdAt;
    protected $fulfillmentOrdersOptIn;
    protected $handle;
    protected $id;
    protected $inventoryManagement;
    protected $location;
    protected $requiresShippingMethod;
    protected $serviceName;
    protected $trackingSupport;
    protected $type;

    
    /**
     * The callback URL that the fulfillment service has registered for requests. The following considerations apply:
     *
     * - Shopify queries the `<callbackUrl>/fetch_tracking_numbers` endpoint to retrieve tracking numbers
     *     for orders, if `trackingSupport` is set to `true`.
     * - Shopify queries the `<callbackUrl>/fetch_stock` endpoint to retrieve inventory levels,
     *     if `inventoryManagement` is set to `true`.
     * - Shopify uses the `<callbackUrl>/fulfillment_order_notification` endpoint to send
     *     [fulfillment and cancellation requests](https://shopify.dev/apps/build/orders-fulfillment/fulfillment-service-apps/build-for-fulfillment-services#step-9-optional-enable-tracking-support).
     *
     * @return string
     */
    public function getCallbackUrl(): mixed
    {
        return $this->callbackUrl;
    }

    
    /**
     * The date and time when the fulfillment service was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * Whether the fulfillment service uses the [fulfillment order based workflow](https://shopify.dev/apps/fulfillment/fulfillment-service-apps/manage-fulfillments) for managing fulfillments.
     *
     * As the migration is now finished, the `fulfillmentOrdersOptIn` property is [deprecated](
     * https://shopify.dev/changelog/deprecation-of-the-fulfillmentservice-fulfillmentordersoptin-field)
     * and is always set to `true` on correctly functioning fulfillment services.
     *
     * @return bool
     */
    public function getFulfillmentOrdersOptIn(): ?bool
    {
        return $this->fulfillmentOrdersOptIn;
    }

    
    /**
     * Human-readable unique identifier for this fulfillment service.
     *
     * @return string
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    
    /**
     * The ID of the fulfillment service.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * Whether the fulfillment service tracks product inventory and provides updates to Shopify.
     *
     * @return bool
     */
    public function getInventoryManagement(): ?bool
    {
        return $this->inventoryManagement;
    }

    
    /**
     * Location associated with the fulfillment service.
     *
     * @return ShopifyLocation
     */
    public function getLocation(): ?ShopifyLocation
    {
        return $this->location;
    }

    
    /**
     * Whether the fulfillment service requires products to be physically shipped.
     *
     * @return bool
     */
    public function getRequiresShippingMethod(): ?bool
    {
        return $this->requiresShippingMethod;
    }

    
    /**
     * The name of the fulfillment service as seen by merchants.
     *
     * @return string
     */
    public function getServiceName(): ?string
    {
        return $this->serviceName;
    }

    
    /**
     * Whether the fulfillment service implemented the /fetch_tracking_numbers endpoint.
     *
     * @return bool
     */
    public function getTrackingSupport(): ?bool
    {
        return $this->trackingSupport;
    }

    
    /**
     * Type associated with the fulfillment service.
     *
     * @return string A ShopifyFulfillmentServiceTypeEnumObject value
     */
    public function getType(): ?string
    {
        return $this->type;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['callbackUrl']) && $data['callbackUrl'] !== null) {
                $instance->callbackUrl = $data['callbackUrl'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['fulfillmentOrdersOptIn']) && $data['fulfillmentOrdersOptIn'] !== null) {
                $instance->fulfillmentOrdersOptIn = $data['fulfillmentOrdersOptIn'];
            }
            if (isset($data['handle']) && $data['handle'] !== null) {
                $instance->handle = $data['handle'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['inventoryManagement']) && $data['inventoryManagement'] !== null) {
                $instance->inventoryManagement = $data['inventoryManagement'];
            }
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = ShopifyLocation::fromArray($data['location']);
            }
            if (isset($data['requiresShippingMethod']) && $data['requiresShippingMethod'] !== null) {
                $instance->requiresShippingMethod = $data['requiresShippingMethod'];
            }
            if (isset($data['serviceName']) && $data['serviceName'] !== null) {
                $instance->serviceName = $data['serviceName'];
            }
            if (isset($data['trackingSupport']) && $data['trackingSupport'] !== null) {
                $instance->trackingSupport = $data['trackingSupport'];
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
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
            if ($this->callbackUrl !== null) {
                $data['callbackUrl'] = $this->callbackUrl;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->fulfillmentOrdersOptIn !== null) {
                $data['fulfillmentOrdersOptIn'] = $this->fulfillmentOrdersOptIn;
            }
            if ($this->handle !== null) {
                $data['handle'] = $this->handle;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->inventoryManagement !== null) {
                $data['inventoryManagement'] = $this->inventoryManagement;
            }
            if ($this->location !== null) {
                $data['location'] = $this->location->asArray();
            }
            if ($this->requiresShippingMethod !== null) {
                $data['requiresShippingMethod'] = $this->requiresShippingMethod;
            }
            if ($this->serviceName !== null) {
                $data['serviceName'] = $this->serviceName;
            }
            if ($this->trackingSupport !== null) {
                $data['trackingSupport'] = $this->trackingSupport;
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            return $data;
        }
}
