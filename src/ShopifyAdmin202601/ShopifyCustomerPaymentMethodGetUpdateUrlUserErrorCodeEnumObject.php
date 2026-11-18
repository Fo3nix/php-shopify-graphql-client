<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CustomerPaymentMethodGetUpdateUrlUserError`.
 */
class ShopifyCustomerPaymentMethodGetUpdateUrlUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Payment method doesn't exist.
     */
    const PAYMENT_METHOD_DOES_NOT_EXIST = "PAYMENT_METHOD_DOES_NOT_EXIST";
    /**
     * Invalid payment instrument.
     */
    const INVALID_INSTRUMENT = "INVALID_INSTRUMENT";
    /**
     * Too many requests.
     */
    const TOO_MANY_REQUESTS = "TOO_MANY_REQUESTS";
    /**
     * Customer doesn't exist.
     */
    const CUSTOMER_DOES_NOT_EXIST = "CUSTOMER_DOES_NOT_EXIST";
}
