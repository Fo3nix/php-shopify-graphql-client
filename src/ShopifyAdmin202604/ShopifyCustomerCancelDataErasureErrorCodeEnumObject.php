<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CustomerCancelDataErasureUserError`.
 */
class ShopifyCustomerCancelDataErasureErrorCodeEnumObject extends EnumObject
{
    /**
     * Customer does not exist.
     */
    const DOES_NOT_EXIST = "DOES_NOT_EXIST";
    /**
     * Failed to cancel customer data erasure.
     */
    const FAILED_TO_CANCEL = "FAILED_TO_CANCEL";
    /**
     * Customer's data is not scheduled for erasure.
     */
    const NOT_BEING_ERASED = "NOT_BEING_ERASED";
    /**
     * Only the original requester can cancel this data erasure.
     */
    const UNAUTHORIZED_CANCELLATION = "UNAUTHORIZED_CANCELLATION";
}
