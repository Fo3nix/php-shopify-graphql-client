<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible values of the last billing error on a subscription contract.
 */
class ShopifySubscriptionContractLastBillingErrorTypeEnumObject extends EnumObject
{
    /**
     * Subscription billing attempt error due to payment error.
     */
    const PAYMENT_ERROR = "PAYMENT_ERROR";
    /**
     * Subscription billing attempt error due to customer error.
     */
    const CUSTOMER_ERROR = "CUSTOMER_ERROR";
    /**
     * Subscription billing attempt error due to inventory error.
     */
    const INVENTORY_ERROR = "INVENTORY_ERROR";
    /**
     * All other billing attempt errors.
     */
    const OTHER = "OTHER";
}
