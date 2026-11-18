<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The type of refund to perform for a particular refund duty.
 */
class ShopifyRefundDutyRefundTypeEnumObject extends EnumObject
{
    /**
     * The duty is proportionally refunded based on the quantity of the refunded line item.
     */
    const PROPORTIONAL = "PROPORTIONAL";
    /**
     * The duty is fully refunded.
     */
    const FULL = "FULL";
}
