<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible recommendations for an order.
 */
class ShopifyOrderRiskRecommendationResultEnumObject extends EnumObject
{
    /**
     * Recommends cancelling the order.
     */
    const CANCEL = "CANCEL";
    /**
     * Recommends investigating the order by contacting buyers.
     */
    const INVESTIGATE = "INVESTIGATE";
    /**
     * Recommends fulfilling the order.
     */
    const ACCEPT = "ACCEPT";
    /**
     * There is no recommended action for the order.
     */
    const NONE = "NONE";
}
