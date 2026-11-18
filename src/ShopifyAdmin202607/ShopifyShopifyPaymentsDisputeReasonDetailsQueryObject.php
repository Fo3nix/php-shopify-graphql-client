<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Details regarding a dispute reason.
 */
class ShopifyShopifyPaymentsDisputeReasonDetailsQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsDisputeReasonDetails";

    /**
     * The raw code provided by the payment network.
     */
    public function selectNetworkReasonCode(): static
    {
        $this->selectField("networkReasonCode");

        return $this;
    }

    /**
     * The reason for the dispute provided by the cardholder's banks.
     */
    public function selectReason(): static
    {
        $this->selectField("reason");

        return $this;
    }
}
