<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentsDisputeFulfillmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsDisputeFulfillment";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectShippingCarrier()
    {
        $this->selectField("shippingCarrier");

        return $this;
    }

    public function selectShippingDate()
    {
        $this->selectField("shippingDate");

        return $this;
    }

    public function selectShippingTrackingNumber()
    {
        $this->selectField("shippingTrackingNumber");

        return $this;
    }
}
