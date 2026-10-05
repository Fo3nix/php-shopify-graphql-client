<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryPromiseSettingQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryPromiseSetting";

    public function selectDeliveryDatesEnabled()
    {
        $this->selectField("deliveryDatesEnabled");

        return $this;
    }

    public function selectProcessingTime()
    {
        $this->selectField("processingTime");

        return $this;
    }
}
