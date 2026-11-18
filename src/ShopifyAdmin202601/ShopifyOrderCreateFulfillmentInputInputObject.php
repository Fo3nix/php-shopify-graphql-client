<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a fulfillment to create for an order.
 */
class ShopifyOrderCreateFulfillmentInputInputObject extends InputObject
{
    const REQUIRED = ["locationId"];

    protected $locationId;
    protected $originAddress;
    protected $notifyCustomer;
    protected $shipmentStatus;
    protected $trackingNumber;
    protected $trackingCompany;

    /**
     * The ID of the location to fulfill the order from.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * The address at which the fulfillment occurred.
     */
    public function setOriginAddress(ShopifyFulfillmentOriginAddressInputInputObject $shopifyFulfillmentOriginAddressInputInputObject): static
    {
        $this->originAddress = $shopifyFulfillmentOriginAddressInputInputObject;

        return $this;
    }

    /**
     * Whether the customer should be notified of changes with the fulfillment.
     */
    public function setNotifyCustomer($notifyCustomer): static
    {
        $this->notifyCustomer = $notifyCustomer;

        return $this;
    }

    /**
     * The status of the shipment.
     */
    public function setShipmentStatus($shopifyFulfillmentEventStatus): static
    {
        $this->shipmentStatus = new RawObject($shopifyFulfillmentEventStatus);

        return $this;
    }

    /**
     * The tracking number of the fulfillment.
     *
     * The tracking number will be clickable in the interface if one of the following applies
     * (the highest in the list has the highest priority):
     *
     * * [Shopify-known tracking company name](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentTrackingInfo#supported-tracking-companies)
     *   specified in the `company` field.
     *   Shopify will build the tracking URL automatically based on the tracking number specified.
     * * The tracking number has a Shopify-known format.
     *   Shopify will guess the tracking provider and build the tracking url based on the tracking number format.
     *   Not all tracking carriers are supported, and multiple tracking carriers may use similarly formatted tracking numbers.
     *   This can result in an invalid tracking URL.
     */
    public function setTrackingNumber($trackingNumber): static
    {
        $this->trackingNumber = $trackingNumber;

        return $this;
    }

    /**
     * The name of the tracking company.
     *
     * If you specify a tracking company name from
     * [the list](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentTrackingInfo#supported-tracking-companies),
     * Shopify will automatically build tracking URLs for all provided tracking numbers,
     * which will make the tracking numbers clickable in the interface. This doesn't mean
     * that Shopify automatically updates the fulfillment's `shipment_status` field in Admin.
     * The same tracking company will be applied to all tracking numbers specified.
     *
     * For tracking companies whose `shipment_status` field is updated automatically, see
     * [Tracking companies with automatic tracking updates](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentTrackingInfo#tracking-companies-with-automatic-tracking-updates).
     *
     * > Note:
     * > Send the tracking company name exactly as written in
     * > [the list](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentTrackingInfo#supported-tracking-companies)
     * > (capitalization matters).
     */
    public function setTrackingCompany($trackingCompany): static
    {
        $this->trackingCompany = $trackingCompany;

        return $this;
    }
}
