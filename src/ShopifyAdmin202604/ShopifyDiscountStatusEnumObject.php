<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The status of the discount that describes its availability,
 * expiration, or pending activation.
 */
class ShopifyDiscountStatusEnumObject extends EnumObject
{
    /**
     * The discount is currently available for use.
     */
    const ACTIVE = "ACTIVE";
    /**
     * The discount has reached its end date and is no longer valid.
     */
    const EXPIRED = "EXPIRED";
    /**
     * The discount is set to become active at a future date.
     */
    const SCHEDULED = "SCHEDULED";
}
