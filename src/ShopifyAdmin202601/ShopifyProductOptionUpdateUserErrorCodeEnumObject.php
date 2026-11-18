<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ProductOptionUpdateUserError`.
 */
class ShopifyProductOptionUpdateUserErrorCodeEnumObject extends EnumObject
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
     * Option already exists.
     */
    const OPTION_ALREADY_EXISTS = "OPTION_ALREADY_EXISTS";
    /**
     * The option position provided is not valid.
     */
    const INVALID_POSITION = "INVALID_POSITION";
    /**
     * The name provided is not valid.
     */
    const INVALID_NAME = "INVALID_NAME";
    /**
     * Option values count is over the allowed limit.
     */
    const OPTION_VALUES_OVER_LIMIT = "OPTION_VALUES_OVER_LIMIT";
    /**
     * Option value does not exist.
     */
    const OPTION_VALUE_DOES_NOT_EXIST = "OPTION_VALUE_DOES_NOT_EXIST";
    /**
     * Option value already exists.
     */
    const OPTION_VALUE_ALREADY_EXISTS = "OPTION_VALUE_ALREADY_EXISTS";
    /**
     * Option value with variants linked cannot be deleted.
     */
    const OPTION_VALUE_HAS_VARIANTS = "OPTION_VALUE_HAS_VARIANTS";
    /**
     * Deleting all option values of an option is not allowed.
     */
    const CANNOT_DELETE_ALL_OPTION_VALUES_IN_OPTION = "CANNOT_DELETE_ALL_OPTION_VALUES_IN_OPTION";
    /**
     * An option cannot be left only with option values that are not linked to any variant.
     */
    const CANNOT_LEAVE_OPTIONS_WITHOUT_VARIANTS = "CANNOT_LEAVE_OPTIONS_WITHOUT_VARIANTS";
    /**
     * On create, this key cannot be used.
     */
    const NO_KEY_ON_CREATE = "NO_KEY_ON_CREATE";
    /**
     * A key is missing in the input.
     */
    const KEY_MISSING_IN_INPUT = "KEY_MISSING_IN_INPUT";
    /**
     * Duplicated option value.
     */
    const DUPLICATED_OPTION_VALUE = "DUPLICATED_OPTION_VALUE";
    /**
     * Option name is too long.
     */
    const OPTION_NAME_TOO_LONG = "OPTION_NAME_TOO_LONG";
    /**
     * Option value name is too long.
     */
    const OPTION_VALUE_NAME_TOO_LONG = "OPTION_VALUE_NAME_TOO_LONG";
    /**
     * Performing conflicting actions on an option value.
     */
    const OPTION_VALUE_CONFLICTING_OPERATION = "OPTION_VALUE_CONFLICTING_OPERATION";
    /**
     * The number of variants will be above the limit after this operation.
     */
    const CANNOT_CREATE_VARIANTS_ABOVE_LIMIT = "CANNOT_CREATE_VARIANTS_ABOVE_LIMIT";
    /**
     * An option cannot have both metafield linked and nonlinked option values.
     */
    const CANNOT_COMBINE_LINKED_AND_NONLINKED_OPTION_VALUES = "CANNOT_COMBINE_LINKED_AND_NONLINKED_OPTION_VALUES";
    /**
     * Invalid metafield value for linked option.
     */
    const INVALID_METAFIELD_VALUE_FOR_LINKED_OPTION = "INVALID_METAFIELD_VALUE_FOR_LINKED_OPTION";
    /**
     * Cannot link multiple options to the same metafield.
     */
    const DUPLICATE_LINKED_OPTION = "DUPLICATE_LINKED_OPTION";
    /**
     * An option linked to the provided metafield already exists.
     */
    const OPTION_LINKED_METAFIELD_ALREADY_TAKEN = "OPTION_LINKED_METAFIELD_ALREADY_TAKEN";
    /**
     * Updating the linked_metafield of an option requires a linked_metafield_value for each option value.
     */
    const LINKED_OPTION_UPDATE_MISSING_VALUES = "LINKED_OPTION_UPDATE_MISSING_VALUES";
    /**
     * Linked options are currently not supported for this shop.
     */
    const LINKED_OPTIONS_NOT_SUPPORTED_FOR_SHOP = "LINKED_OPTIONS_NOT_SUPPORTED_FOR_SHOP";
    /**
     * No valid metafield definition found for linked option.
     */
    const LINKED_METAFIELD_DEFINITION_NOT_FOUND = "LINKED_METAFIELD_DEFINITION_NOT_FOUND";
    /**
     * At least one of the product variants has invalid SKUs.
     */
    const CANNOT_MAKE_CHANGES_IF_VARIANT_IS_MISSING_REQUIRED_SKU = "CANNOT_MAKE_CHANGES_IF_VARIANT_IS_MISSING_REQUIRED_SKU";
    /**
     * Operation is not supported for a combined listing parent product.
     */
    const UNSUPPORTED_COMBINED_LISTING_PARENT_OPERATION = "UNSUPPORTED_COMBINED_LISTING_PARENT_OPERATION";
    /**
     * Cannot update the option because it would result in deleting variants, and you don't have the required permissions.
     */
    const CANNOT_DELETE_VARIANT_WITHOUT_PERMISSION = "CANNOT_DELETE_VARIANT_WITHOUT_PERMISSION";
    /**
     * The number of option values created with the MANAGE strategy would exceed the variant limit.
     */
    const TOO_MANY_VARIANTS_CREATED = "TOO_MANY_VARIANTS_CREATED";
}
