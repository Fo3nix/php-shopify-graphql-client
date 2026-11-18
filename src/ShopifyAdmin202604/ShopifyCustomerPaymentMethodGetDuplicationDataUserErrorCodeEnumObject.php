<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CustomerPaymentMethodGetDuplicationDataUserError`.
 */
class ShopifyCustomerPaymentMethodGetDuplicationDataUserErrorCodeEnumObject extends EnumObject
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
    /**
     * Target shop cannot be the same as the source.
     */
    const SAME_SHOP = "SAME_SHOP";
    /**
     * Must be targeted to another shop in the same organization.
     */
    const INVALID_ORGANIZATION_SHOP = "INVALID_ORGANIZATION_SHOP";
}
