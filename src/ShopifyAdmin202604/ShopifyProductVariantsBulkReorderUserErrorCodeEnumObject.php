<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ProductVariantsBulkReorderUserError`.
 */
class ShopifyProductVariantsBulkReorderUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Product does not exist.
     */
    const PRODUCT_DOES_NOT_EXIST = "PRODUCT_DOES_NOT_EXIST";
    /**
     * Product variant does not exist.
     */
    const MISSING_VARIANT = "MISSING_VARIANT";
    /**
     * Product variant position cannot be zero or negative number.
     */
    const INVALID_POSITION = "INVALID_POSITION";
    /**
     * Product variant IDs must be unique.
     */
    const DUPLICATED_VARIANT_ID = "DUPLICATED_VARIANT_ID";
    /**
     * Something went wrong, please try again.
     */
    const GENERIC_ERROR = "GENERIC_ERROR";
}
