<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the information used to track a reverse delivery.
 */
class ShopifyReverseDeliveryTrackingV2QueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDeliveryTrackingV2";

    /**
     * The provider of the tracking information, in a human-readable format for display purposes.
     */
    public function selectCarrierName(): static
    {
        $this->selectField("carrierName");

        return $this;
    }

    /**
     * The identifier used by the courier to identify the shipment.
     */
    public function selectNumber(): static
    {
        $this->selectField("number");

        return $this;
    }

    /**
     * The URL to track a shipment.
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }
}
