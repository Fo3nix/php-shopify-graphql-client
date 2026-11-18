<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The reason a discount on a subscription draft was rejected.
 */
class ShopifySubscriptionDiscountRejectionReasonEnumObject extends EnumObject
{
    /**
     * Discount code is not found.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * Discount does not apply to any of the given line items.
     */
    const NO_ENTITLED_LINE_ITEMS = "NO_ENTITLED_LINE_ITEMS";
    /**
     * Quantity of items does not qualify for the discount.
     */
    const QUANTITY_NOT_IN_RANGE = "QUANTITY_NOT_IN_RANGE";
    /**
     * Purchase amount of items does not qualify for the discount.
     */
    const PURCHASE_NOT_IN_RANGE = "PURCHASE_NOT_IN_RANGE";
    /**
     * Given customer does not qualify for the discount.
     */
    const CUSTOMER_NOT_ELIGIBLE = "CUSTOMER_NOT_ELIGIBLE";
    /**
     * Discount usage limit has been reached.
     */
    const USAGE_LIMIT_REACHED = "USAGE_LIMIT_REACHED";
    /**
     * Customer usage limit has been reached.
     */
    const CUSTOMER_USAGE_LIMIT_REACHED = "CUSTOMER_USAGE_LIMIT_REACHED";
    /**
     * Discount is inactive.
     */
    const CURRENTLY_INACTIVE = "CURRENTLY_INACTIVE";
    /**
     * No applicable shipping lines.
     */
    const NO_ENTITLED_SHIPPING_LINES = "NO_ENTITLED_SHIPPING_LINES";
    /**
     * Purchase type does not qualify for the discount.
     */
    const INCOMPATIBLE_PURCHASE_TYPE = "INCOMPATIBLE_PURCHASE_TYPE";
    /**
     * Internal error during discount code validation.
     */
    const INTERNAL_ERROR = "INTERNAL_ERROR";
}
