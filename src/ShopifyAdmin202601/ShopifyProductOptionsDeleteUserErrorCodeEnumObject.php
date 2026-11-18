<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ProductOptionsDeleteUserError`.
 */
class ShopifyProductOptionsDeleteUserErrorCodeEnumObject extends EnumObject
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
     * Option does not exist.
     */
    const OPTION_DOES_NOT_EXIST = "OPTION_DOES_NOT_EXIST";
    /**
     * Options do not belong to the same product.
     */
    const OPTIONS_DO_NOT_BELONG_TO_THE_SAME_PRODUCT = "OPTIONS_DO_NOT_BELONG_TO_THE_SAME_PRODUCT";
    /**
     * Can't delete option with multiple values.
     */
    const CANNOT_DELETE_OPTION_WITH_MULTIPLE_VALUES = "CANNOT_DELETE_OPTION_WITH_MULTIPLE_VALUES";
    /**
     * Cannot delete options without deleting variants.
     */
    const CANNOT_USE_NON_DESTRUCTIVE_STRATEGY = "CANNOT_USE_NON_DESTRUCTIVE_STRATEGY";
    /**
     * At least one of the product variants has invalid SKUs.
     */
    const CANNOT_MAKE_CHANGES_IF_VARIANT_IS_MISSING_REQUIRED_SKU = "CANNOT_MAKE_CHANGES_IF_VARIANT_IS_MISSING_REQUIRED_SKU";
    /**
     * Operation is not supported for a combined listing parent product.
     */
    const UNSUPPORTED_COMBINED_LISTING_PARENT_OPERATION = "UNSUPPORTED_COMBINED_LISTING_PARENT_OPERATION";
    /**
     * Cannot perform option deletion because it would result in deleting variants, and you don't have the required permissions.
     */
    const CANNOT_DELETE_VARIANT_WITHOUT_PERMISSION = "CANNOT_DELETE_VARIANT_WITHOUT_PERMISSION";
}
