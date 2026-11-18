<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFulfillmentServiceUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $name;
    protected $callbackUrl;
    protected $trackingSupport;
    protected $inventoryManagement;
    protected $requiresShippingMethod;

    /**
     * The id of the fulfillment service.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The name of the fulfillment service.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The URL to send requests for the fulfillment service.
     *
     * If `callbackUrl` is provided:
     * - Shopify queries the <code>callback_url/fetch_tracking_numbers</code> endpoint to retrieve tracking numbers
     *     for orders, if `trackingSupport` is set to `true`.
     * - Shopify queries the <code>callback_url/fetch_stock</code> endpoint to retrieve inventory levels,
     *     if `inventoryManagement` is set to `true`.
     * - Shopify uses the <code>callback_url/fulfillment_order_notification</code> endpoint to send
     *     [fulfillment and cancellation requests](https://shopify.dev/apps/fulfillment/fulfillment-service-apps/manage-fulfillments#step-2-receive-fulfillment-requests-and-cancellations).
     *
     * Otherwise, if no `callbackUrl` is provided you need to submit this information via the api:
     * - For submitting tracking info and handling fulfillment requests, see our docs on [building for fulfillment services](https://shopify.dev/apps/build/orders-fulfillment/fulfillment-service-apps/build-for-fulfillment-services).
     * - For managing inventory quantities, see our docs on [managing inventory quantities and states](https://shopify.dev/apps/build/orders-fulfillment/inventory-management-apps/manage-quantities-states).
     */
    public function setCallbackUrl($callbackUrl): static
    {
        $this->callbackUrl = $callbackUrl;

        return $this;
    }

    /**
     * Whether the fulfillment service provides tracking numbers for packages.
     *
     * If `callbackUrl` is provided, Shopify will periodically fetch tracking numbers via the callback endpoint.
     *
     * If no `callbackUrl` is provided you need to submit this information via the api, see our docs on [building for fulfillment services](https://shopify.dev/apps/build/orders-fulfillment/fulfillment-service-apps/build-for-fulfillment-services).
     */
    public function setTrackingSupport($trackingSupport): static
    {
        $this->trackingSupport = $trackingSupport;

        return $this;
    }

    /**
     * Whether the fulfillment service manages product inventory and provides updates to Shopify.
     *
     * If `callbackUrl` is provided, Shopify will periodically fetch inventory levels via the callback endpoint.
     *
     * If no `callbackUrl` is provided you need to submit this information via the api, see our docs on [managing inventory quantities and states](https://shopify.dev/apps/build/orders-fulfillment/inventory-management-apps/manage-quantities-states).
     */
    public function setInventoryManagement($inventoryManagement): static
    {
        $this->inventoryManagement = $inventoryManagement;

        return $this;
    }

    /**
     * Whether the fulfillment service requires products to be physically shipped.
     */
    public function setRequiresShippingMethod($requiresShippingMethod): static
    {
        $this->requiresShippingMethod = $requiresShippingMethod;

        return $this;
    }
}
