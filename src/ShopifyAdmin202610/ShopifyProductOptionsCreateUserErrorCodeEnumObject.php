<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ProductOptionsCreateUserError`.
 */
class ShopifyProductOptionsCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Option already exists.
     */
    const OPTION_ALREADY_EXISTS = "OPTION_ALREADY_EXISTS";
    /**
     * Options count is over the allowed limit.
     */
    const OPTIONS_OVER_LIMIT = "OPTIONS_OVER_LIMIT";
    /**
     * Option values count is over the allowed limit.
     */
    const OPTION_VALUES_OVER_LIMIT = "OPTION_VALUES_OVER_LIMIT";
    /**
     * The name provided is not valid.
     */
    const INVALID_NAME = "INVALID_NAME";
    /**
     * Product is suspended.
     */
    const PRODUCT_SUSPENDED = "PRODUCT_SUSPENDED";
    /**
     * Cannot create new options without values for all existing variants.
     */
    const NEW_OPTION_WITHOUT_VALUE_FOR_EXISTING_VARIANTS = "NEW_OPTION_WITHOUT_VALUE_FOR_EXISTING_VARIANTS";
    /**
     * Duplicated option name.
     */
    const DUPLICATED_OPTION_NAME = "DUPLICATED_OPTION_NAME";
    /**
     * Duplicated option value.
     */
    const DUPLICATED_OPTION_VALUE = "DUPLICATED_OPTION_VALUE";
    /**
     * Each option must have a name specified.
     */
    const OPTION_NAME_MISSING = "OPTION_NAME_MISSING";
    /**
     * Each option must have at least one option value specified.
     */
    const OPTION_VALUES_MISSING = "OPTION_VALUES_MISSING";
    /**
     * Option value name is too long.
     */
    const OPTION_VALUE_NAME_TOO_LONG = "OPTION_VALUE_NAME_TOO_LONG";
    /**
     * Option name is too long.
     */
    const OPTION_NAME_TOO_LONG = "OPTION_NAME_TOO_LONG";
    /**
     * Position must be between 1 and the maximum number of options per product.
     */
    const POSITION_OUT_OF_BOUNDS = "POSITION_OUT_OF_BOUNDS";
    /**
     * If specified, position field must be present in all option inputs.
     */
    const OPTION_POSITION_MISSING = "OPTION_POSITION_MISSING";
    /**
     * Product does not exist.
     */
    const PRODUCT_DOES_NOT_EXIST = "PRODUCT_DOES_NOT_EXIST";
    /**
     * No valid metafield definition found for linked option.
     */
    const LINKED_METAFIELD_DEFINITION_NOT_FOUND = "LINKED_METAFIELD_DEFINITION_NOT_FOUND";
    /**
     * Invalid metafield value for linked option.
     */
    const INVALID_METAFIELD_VALUE_FOR_LINKED_OPTION = "INVALID_METAFIELD_VALUE_FOR_LINKED_OPTION";
    /**
     * Missing metafield values for linked option.
     */
    const MISSING_METAFIELD_VALUES_FOR_LINKED_OPTION = "MISSING_METAFIELD_VALUES_FOR_LINKED_OPTION";
    /**
     * Cannot combine linked metafield and option values.
     */
    const CANNOT_COMBINE_LINKED_METAFIELD_AND_OPTION_VALUES = "CANNOT_COMBINE_LINKED_METAFIELD_AND_OPTION_VALUES";
    /**
     * Cannot link multiple options to the same metafield.
     */
    const DUPLICATE_LINKED_OPTION = "DUPLICATE_LINKED_OPTION";
    /**
     * An option linked to the provided metafield already exists.
     */
    const OPTION_LINKED_METAFIELD_ALREADY_TAKEN = "OPTION_LINKED_METAFIELD_ALREADY_TAKEN";
    /**
     * Linked options are currently not supported for this shop.
     */
    const LINKED_OPTIONS_NOT_SUPPORTED_FOR_SHOP = "LINKED_OPTIONS_NOT_SUPPORTED_FOR_SHOP";
    /**
     * At least one of the product variants has invalid SKUs.
     */
    const CANNOT_MAKE_CHANGES_IF_VARIANT_IS_MISSING_REQUIRED_SKU = "CANNOT_MAKE_CHANGES_IF_VARIANT_IS_MISSING_REQUIRED_SKU";
    /**
     * Operation is not supported for a combined listing parent product.
     */
    const UNSUPPORTED_COMBINED_LISTING_PARENT_OPERATION = "UNSUPPORTED_COMBINED_LISTING_PARENT_OPERATION";
    /**
     * Cannot specify 'linkedMetafieldValue' for an option that is not linked to a metafield.
     */
    const LINKED_METAFIELD_VALUE_WITHOUT_LINKED_OPTION = "LINKED_METAFIELD_VALUE_WITHOUT_LINKED_OPTION";
    /**
     * The number of option values created with the CREATE strategy would exceed the variant limit.
     */
    const TOO_MANY_VARIANTS_CREATED = "TOO_MANY_VARIANTS_CREATED";
}
