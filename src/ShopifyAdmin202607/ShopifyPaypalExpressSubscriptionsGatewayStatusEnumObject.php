<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Represents a valid PayPal Express subscriptions gateway status.
 */
class ShopifyPaypalExpressSubscriptionsGatewayStatusEnumObject extends EnumObject
{
    /**
     * The status is enabled.
     */
    const ENABLED = "ENABLED";
    /**
     * The status is disabled.
     */
    const DISABLED = "DISABLED";
    /**
     * The status is pending.
     */
    const PENDING = "PENDING";
}
