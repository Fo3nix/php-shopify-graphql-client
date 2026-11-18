<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ProductOptionsReorderUserError`.
 */
class ShopifyProductOptionsReorderUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Option name does not exist.
     */
    const OPTION_NAME_DOES_NOT_EXIST = "OPTION_NAME_DOES_NOT_EXIST";
    /**
     * Option value does not exist.
     */
    const OPTION_VALUE_DOES_NOT_EXIST = "OPTION_VALUE_DOES_NOT_EXIST";
    /**
     * Option id does not exist.
     */
    const OPTION_ID_DOES_NOT_EXIST = "OPTION_ID_DOES_NOT_EXIST";
    /**
     * Option value id does not exist.
     */
    const OPTION_VALUE_ID_DOES_NOT_EXIST = "OPTION_VALUE_ID_DOES_NOT_EXIST";
    /**
     * Duplicated option name.
     */
    const DUPLICATED_OPTION_NAME = "DUPLICATED_OPTION_NAME";
    /**
     * Duplicated option value.
     */
    const DUPLICATED_OPTION_VALUE = "DUPLICATED_OPTION_VALUE";
    /**
     * Missing option name.
     */
    const MISSING_OPTION_NAME = "MISSING_OPTION_NAME";
    /**
     * Missing option value.
     */
    const MISSING_OPTION_VALUE = "MISSING_OPTION_VALUE";
    /**
     * Product does not exist.
     */
    const PRODUCT_DOES_NOT_EXIST = "PRODUCT_DOES_NOT_EXIST";
    /**
     * Product is suspended.
     */
    const PRODUCT_SUSPENDED = "PRODUCT_SUSPENDED";
    /**
     * On reorder, this key cannot be used.
     */
    const NO_KEY_ON_REORDER = "NO_KEY_ON_REORDER";
    /**
     * Cannot specify different options or option values using mixed id and name reference key.
     */
    const MIXING_ID_AND_NAME_KEYS_IS_NOT_ALLOWED = "MIXING_ID_AND_NAME_KEYS_IS_NOT_ALLOWED";
    /**
     * At least one of the product variants has invalid SKUs.
     */
    const CANNOT_MAKE_CHANGES_IF_VARIANT_IS_MISSING_REQUIRED_SKU = "CANNOT_MAKE_CHANGES_IF_VARIANT_IS_MISSING_REQUIRED_SKU";
}
