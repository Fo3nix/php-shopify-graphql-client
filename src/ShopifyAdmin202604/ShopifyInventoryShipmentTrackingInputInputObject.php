<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for an inventory shipment's tracking information.
 */
class ShopifyInventoryShipmentTrackingInputInputObject extends InputObject
{
    protected $trackingNumber;
    protected $company;
    protected $trackingUrl;
    protected $arrivesAt;

    /**
     * The tracking number for the shipment.
     */
    public function setTrackingNumber($trackingNumber): static
    {
        $this->trackingNumber = $trackingNumber;

        return $this;
    }

    /**
     * The name of the shipping carrier company.
     *
     * Given a shipping carrier company name from
     * [the list](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentTrackingInfo#field-company),
     * Shopify can build a tracking URL for a provided tracking number.
     */
    public function setCompany($company): static
    {
        $this->company = $company;

        return $this;
    }

    /**
     * The URL to track the shipment.
     *
     * Use this field to specify a custom tracking URL. If no custom tracking URL is set, Shopify will automatically provide
     * this field on query for a tracking number and a supported shipping carrier company from
     * [the list](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentTrackingInfo#field-company).
     */
    public function setTrackingUrl($trackingUrl): static
    {
        $this->trackingUrl = $trackingUrl;

        return $this;
    }

    /**
     * The estimated date and time that the shipment will arrive.
     */
    public function setArrivesAt($arrivesAt): static
    {
        $this->arrivesAt = $arrivesAt;

        return $this;
    }
}
