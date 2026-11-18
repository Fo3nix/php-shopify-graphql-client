<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `OrderCreateUserError`.
 */
class ShopifyOrderCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * Indicates that the line item fulfillment service handle is invalid.
     */
    const FULFILLMENT_SERVICE_INVALID = "FULFILLMENT_SERVICE_INVALID";
    /**
     * Indicates that the inventory claim failed during order creation.
     */
    const INVENTORY_CLAIM_FAILED = "INVENTORY_CLAIM_FAILED";
    /**
     * Indicates that the processed_at field is invalid, such as when it references a future date.
     */
    const PROCESSED_AT_INVALID = "PROCESSED_AT_INVALID";
    /**
     * Indicates that the tax line rate is missing - only enforced for LineItem or ShippingLine-level tax lines.
     */
    const TAX_LINE_RATE_MISSING = "TAX_LINE_RATE_MISSING";
    /**
     * Indicates that both customer_id and customer were provided - only one is permitted.
     */
    const REDUNDANT_CUSTOMER_FIELDS = "REDUNDANT_CUSTOMER_FIELDS";
    /**
     * Indicates that the shop is dormant and cannot create orders.
     */
    const SHOP_DORMANT = "SHOP_DORMANT";
}
