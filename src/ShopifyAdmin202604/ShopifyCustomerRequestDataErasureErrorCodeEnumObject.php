<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CustomerRequestDataErasureUserError`.
 */
class ShopifyCustomerRequestDataErasureErrorCodeEnumObject extends EnumObject
{
    /**
     * Customer does not exist.
     */
    const DOES_NOT_EXIST = "DOES_NOT_EXIST";
    /**
     * Failed to request customer data erasure.
     */
    const FAILED_TO_REQUEST = "FAILED_TO_REQUEST";
}
