<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryPromiseSettingQueryObject extends QueryObject
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
