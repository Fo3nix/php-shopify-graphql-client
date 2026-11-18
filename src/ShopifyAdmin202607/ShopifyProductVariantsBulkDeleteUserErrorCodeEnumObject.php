<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ProductVariantsBulkDeleteUserError`.
 */
class ShopifyProductVariantsBulkDeleteUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Product does not exist.
     */
    const PRODUCT_DOES_NOT_EXIST = "PRODUCT_DOES_NOT_EXIST";
    /**
     * Product is suspended.
     */
    const PRODUCT_SUSPENDED = "PRODUCT_SUSPENDED";
    /**
     * Cannot delete default variant.
     */
    const CANNOT_DELETE_LAST_VARIANT = "CANNOT_DELETE_LAST_VARIANT";
    /**
     * The variant does not exist.
     */
    const AT_LEAST_ONE_VARIANT_DOES_NOT_BELONG_TO_THE_PRODUCT = "AT_LEAST_ONE_VARIANT_DOES_NOT_BELONG_TO_THE_PRODUCT";
    /**
     * Operation is not supported for a combined listing parent product.
     */
    const UNSUPPORTED_COMBINED_LISTING_PARENT_OPERATION = "UNSUPPORTED_COMBINED_LISTING_PARENT_OPERATION";
}
