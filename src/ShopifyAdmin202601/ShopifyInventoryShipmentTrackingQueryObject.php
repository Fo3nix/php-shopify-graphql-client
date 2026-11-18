<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the tracking information for an inventory shipment.
 */
class ShopifyInventoryShipmentTrackingQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipmentTracking";

    /**
     * The estimated date and time that the shipment will arrive.
     */
    public function selectArrivesAt(): static
    {
        $this->selectField("arrivesAt");

        return $this;
    }

    /**
     * The name of the shipping carrier company.
     */
    public function selectCompany(): static
    {
        $this->selectField("company");

        return $this;
    }

    /**
     * The tracking number used by the carrier to identify the shipment.
     */
    public function selectTrackingNumber(): static
    {
        $this->selectField("trackingNumber");

        return $this;
    }

    /**
     * The URL to track the shipment.
     *
     * Given a tracking number and a shipping carrier company name from
     * [the list](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentTrackingInfo#field-company),
     * Shopify will return a generated tracking URL if no tracking URL was set manually.
     */
    public function selectTrackingUrl(): static
    {
        $this->selectField("trackingUrl");

        return $this;
    }
}
