<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The delivery promise settings.
 */
class ShopifyDeliveryPromiseSettingQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryPromiseSetting";

    /**
     * Whether delivery dates is enabled.
     */
    public function selectDeliveryDatesEnabled(): static
    {
        $this->selectField("deliveryDatesEnabled");

        return $this;
    }

    /**
     * The number of business days required for processing the order before the package is handed off to the carrier. Expressed as an ISO8601 duration.
     */
    public function selectProcessingTime(): static
    {
        $this->selectField("processingTime");

        return $this;
    }
}
