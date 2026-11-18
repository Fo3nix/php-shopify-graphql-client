<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A tracking event that records the status and location of a fulfillment at a specific point in time. Each event captures details such as the [status](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentEvent#field-FulfillmentEvent.fields.status) (for example, in transit, out for delivery, delivered) and any [messages](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentEvent#field-FulfillmentEvent.fields.message) associated with the event.
 *
 * Fulfillment events provide a chronological history of a package's journey from shipment to delivery. They include timestamps, geographic coordinates, and estimated delivery dates to track fulfillment progress.
 */
class ShopifyFulfillmentEventQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentEvent";

    /**
     * The street address where this fulfillment event occurred.
     */
    public function selectAddress1(): static
    {
        $this->selectField("address1");

        return $this;
    }

    /**
     * The city where this fulfillment event occurred.
     */
    public function selectCity(): static
    {
        $this->selectField("city");

        return $this;
    }

    /**
     * The country where this fulfillment event occurred.
     */
    public function selectCountry(): static
    {
        $this->selectField("country");

        return $this;
    }

    /**
     * The date and time when the fulfillment event was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The estimated delivery date and time of the fulfillment.
     */
    public function selectEstimatedDeliveryAt(): static
    {
        $this->selectField("estimatedDeliveryAt");

        return $this;
    }

    /**
     * The time at which this fulfillment event happened.
     */
    public function selectHappenedAt(): static
    {
        $this->selectField("happenedAt");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The latitude where this fulfillment event occurred.
     */
    public function selectLatitude(): static
    {
        $this->selectField("latitude");

        return $this;
    }

    /**
     * The longitude where this fulfillment event occurred.
     */
    public function selectLongitude(): static
    {
        $this->selectField("longitude");

        return $this;
    }

    /**
     * A message associated with this fulfillment event.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }

    /**
     * The province where this fulfillment event occurred.
     */
    public function selectProvince(): static
    {
        $this->selectField("province");

        return $this;
    }

    /**
     * The status of this fulfillment event.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * The zip code of the location where this fulfillment event occurred.
     */
    public function selectZip(): static
    {
        $this->selectField("zip");

        return $this;
    }
}
