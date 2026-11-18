<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The status of the price rule.
 */
class ShopifyPriceRuleStatusEnumObject extends EnumObject
{
    /**
     * The price rule is active.
     */
    const ACTIVE = "ACTIVE";
    /**
     * The price rule is expired.
     */
    const EXPIRED = "EXPIRED";
    /**
     * The price rule is scheduled.
     */
    const SCHEDULED = "SCHEDULED";
}
