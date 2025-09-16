<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReverseDeliveryTrackingV2QueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDeliveryTrackingV2";

    public function selectCarrierName()
    {
        $this->selectField("carrierName");

        return $this;
    }

    public function selectNumber()
    {
        $this->selectField("number");

        return $this;
    }

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }
}
