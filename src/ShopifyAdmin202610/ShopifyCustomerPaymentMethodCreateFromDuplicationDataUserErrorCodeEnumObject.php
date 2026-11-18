<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CustomerPaymentMethodCreateFromDuplicationDataUserError`.
 */
class ShopifyCustomerPaymentMethodCreateFromDuplicationDataUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Too many requests.
     */
    const TOO_MANY_REQUESTS = "TOO_MANY_REQUESTS";
    /**
     * Customer doesn't exist.
     */
    const CUSTOMER_DOES_NOT_EXIST = "CUSTOMER_DOES_NOT_EXIST";
    /**
     * Invalid encrypted duplication data.
     */
    const INVALID_ENCRYPTED_DUPLICATION_DATA = "INVALID_ENCRYPTED_DUPLICATION_DATA";
}
