<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The different methods that a refund amount can be allocated to.
 */
class ShopifyRefundMethodAllocationEnumObject extends EnumObject
{
    /**
     * The refund is to original payment methods.
     */
    const ORIGINAL_PAYMENT_METHODS = "ORIGINAL_PAYMENT_METHODS";
    /**
     * The refund is to store credit.
     */
    const STORE_CREDIT = "STORE_CREDIT";
}
