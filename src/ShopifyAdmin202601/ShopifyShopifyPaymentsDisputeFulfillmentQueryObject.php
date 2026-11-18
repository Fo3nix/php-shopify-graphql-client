<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The fulfillment associated with dispute evidence.
 */
class ShopifyShopifyPaymentsDisputeFulfillmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsDisputeFulfillment";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The shipping carrier for this fulfillment.
     */
    public function selectShippingCarrier(): static
    {
        $this->selectField("shippingCarrier");

        return $this;
    }

    /**
     * The shipping date for this fulfillment.
     */
    public function selectShippingDate(): static
    {
        $this->selectField("shippingDate");

        return $this;
    }

    /**
     * The shipping tracking number for this fulfillment.
     */
    public function selectShippingTrackingNumber(): static
    {
        $this->selectField("shippingTrackingNumber");

        return $this;
    }
}
