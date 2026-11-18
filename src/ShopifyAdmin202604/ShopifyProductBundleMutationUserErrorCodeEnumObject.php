<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ProductBundleMutationUserError`.
 */
class ShopifyProductBundleMutationUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Something went wrong, please try again.
     */
    const GENERIC_ERROR = "GENERIC_ERROR";
    /**
     * Product does not exist.
     */
    const PRODUCT_DOES_NOT_EXIST = "PRODUCT_DOES_NOT_EXIST";
    /**
     * Input is not valid.
     */
    const INVALID_INPUT = "INVALID_INPUT";
    /**
     * Error processing request in the background job.
     */
    const JOB_ERROR = "JOB_ERROR";
}
