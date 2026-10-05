<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryShipmentTrackingQueryObject extends QueryObject
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
