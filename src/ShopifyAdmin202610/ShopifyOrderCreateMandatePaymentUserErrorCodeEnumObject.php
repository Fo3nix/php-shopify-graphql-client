<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `OrderCreateMandatePaymentUserError`.
 */
class ShopifyOrderCreateMandatePaymentUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Errors for mandate payment on order.
     */
    const ORDER_MANDATE_PAYMENT_ERROR_CODE = "ORDER_MANDATE_PAYMENT_ERROR_CODE";
}
