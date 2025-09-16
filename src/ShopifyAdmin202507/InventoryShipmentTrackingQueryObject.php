<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class InventoryShipmentTrackingQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipmentTracking";

    public function selectArrivesAt()
    {
        $this->selectField("arrivesAt");

        return $this;
    }

    public function selectCompany()
    {
        $this->selectField("company");

        return $this;
    }

    public function selectTrackingNumber()
    {
        $this->selectField("trackingNumber");

        return $this;
    }

    public function selectTrackingUrl()
    {
        $this->selectField("trackingUrl");

        return $this;
    }
}
