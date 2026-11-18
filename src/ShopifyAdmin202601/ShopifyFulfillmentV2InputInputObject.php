<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to create a fulfillment from fulfillment orders.
 */
class ShopifyFulfillmentV2InputInputObject extends InputObject
{
    const REQUIRED = ["lineItemsByFulfillmentOrder"];

    protected $trackingInfo;
    protected $notifyCustomer;
    protected $lineItemsByFulfillmentOrder;
    protected $originAddress;

    /**
     * The fulfillment's tracking information, including a tracking URL, a tracking number,
     * and the company associated with the fulfillment.
     */
    public function setTrackingInfo(ShopifyFulfillmentTrackingInputInputObject $shopifyFulfillmentTrackingInputInputObject): static
    {
        $this->trackingInfo = $shopifyFulfillmentTrackingInputInputObject;

        return $this;
    }

    /**
     * Whether the customer is notified.
     * If `true`, then a notification is sent when the fulfillment is created. The default value is `false`.
     */
    public function setNotifyCustomer($notifyCustomer): static
    {
        $this->notifyCustomer = $notifyCustomer;

        return $this;
    }

    /**
     * Pairs of `fulfillment_order_id` and `fulfillment_order_line_items` that represent the fulfillment
     * order line items that have to be fulfilled for each fulfillment order.  For any given pair, if the
     * fulfillment order line items are left blank then all the fulfillment order line items of the
     * associated fulfillment order ID will be fulfilled.
     */
    public function setLineItemsByFulfillmentOrder(array $lineItemsByFulfillmentOrder): static
    {
        $this->lineItemsByFulfillmentOrder = $lineItemsByFulfillmentOrder;

        return $this;
    }

    /**
     * Address information about the location from which the order was fulfilled.
     */
    public function setOriginAddress(ShopifyFulfillmentOriginAddressInputInputObject $shopifyFulfillmentOriginAddressInputInputObject): static
    {
        $this->originAddress = $shopifyFulfillmentOriginAddressInputInputObject;

        return $this;
    }
}
