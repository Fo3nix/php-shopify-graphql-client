<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to create a fulfillment event.
 */
class ShopifyFulfillmentEventInputInputObject extends InputObject
{
    const REQUIRED = ["fulfillmentId", "status"];

    protected $address1;
    protected $city;
    protected $country;
    protected $estimatedDeliveryAt;
    protected $happenedAt;
    protected $fulfillmentId;
    protected $latitude;
    protected $longitude;
    protected $message;
    protected $province;
    protected $status;
    protected $zip;

    /**
     * The street address where this fulfillment event occurred.
     */
    public function setAddress1($address1): static
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * The city where this fulfillment event occurred.
     */
    public function setCity($city): static
    {
        $this->city = $city;

        return $this;
    }

    /**
     * The country where this fulfillment event occurred.
     */
    public function setCountry($country): static
    {
        $this->country = $country;

        return $this;
    }

    /**
     * The estimated delivery date and time of the fulfillment.
     */
    public function setEstimatedDeliveryAt($estimatedDeliveryAt): static
    {
        $this->estimatedDeliveryAt = $estimatedDeliveryAt;

        return $this;
    }

    /**
     * The time at which this fulfillment event happened.
     */
    public function setHappenedAt($happenedAt): static
    {
        $this->happenedAt = $happenedAt;

        return $this;
    }

    /**
     * The ID for the fulfillment that's associated with this fulfillment event.
     */
    public function setFulfillmentId($fulfillmentId): static
    {
        $this->fulfillmentId = $fulfillmentId;

        return $this;
    }

    /**
     * The latitude where this fulfillment event occurred.
     */
    public function setLatitude($latitude): static
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * The longitude where this fulfillment event occurred.
     */
    public function setLongitude($longitude): static
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * A message associated with this fulfillment event.
     */
    public function setMessage($message): static
    {
        $this->message = $message;

        return $this;
    }

    /**
     * The province where this fulfillment event occurred.
     */
    public function setProvince($province): static
    {
        $this->province = $province;

        return $this;
    }

    /**
     * The status of this fulfillment event.
     */
    public function setStatus($shopifyFulfillmentEventStatus): static
    {
        $this->status = new RawObject($shopifyFulfillmentEventStatus);

        return $this;
    }

    /**
     * The zip code of the location where this fulfillment event occurred.
     */
    public function setZip($zip): static
    {
        $this->zip = $zip;

        return $this;
    }
}
