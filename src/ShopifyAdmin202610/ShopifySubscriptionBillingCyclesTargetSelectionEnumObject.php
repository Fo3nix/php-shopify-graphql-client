<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Select subscription billing cycles to be targeted.
 */
class ShopifySubscriptionBillingCyclesTargetSelectionEnumObject extends EnumObject
{
    /**
     * Target all current and upcoming subscription billing cycles.
     */
    const ALL = "ALL";
}
