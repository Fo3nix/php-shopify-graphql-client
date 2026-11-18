<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CombinedListingUpdateUserError`.
 */
class ShopifyCombinedListingUpdateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Unable to add duplicated products.
     */
    const CANNOT_HAVE_DUPLICATED_PRODUCTS = "CANNOT_HAVE_DUPLICATED_PRODUCTS";
    /**
     * Unable to add a product that is a parent.
     */
    const CANNOT_HAVE_PARENT_AS_CHILD = "CANNOT_HAVE_PARENT_AS_CHILD";
    /**
     * Option values cannot be repeated.
     */
    const CANNOT_HAVE_REPEATED_OPTION_VALUES = "CANNOT_HAVE_REPEATED_OPTION_VALUES";
    /**
     * Unable to add products with repeated options.
     */
    const CANNOT_HAVE_REPEATED_OPTIONS = "CANNOT_HAVE_REPEATED_OPTIONS";
    /**
     * Unable to add options values that are already in use.
     */
    const CANT_ADD_OPTIONS_VALUES_IF_ALREADY_EXISTS = "CANT_ADD_OPTIONS_VALUES_IF_ALREADY_EXISTS";
    /**
     * Combined listings feature is not enabled.
     */
    const COMBINED_LISTINGS_NOT_ENABLED = "COMBINED_LISTINGS_NOT_ENABLED";
    /**
     * Cannot perform edit and remove on same products.
     */
    const EDIT_AND_REMOVE_ON_SAME_PRODUCTS = "EDIT_AND_REMOVE_ON_SAME_PRODUCTS";
    /**
     * Unable to add products.
     */
    const FAILED_TO_ADD_PRODUCTS = "FAILED_TO_ADD_PRODUCTS";
    /**
     * Unable to remove products.
     */
    const FAILED_TO_REMOVE_PRODUCTS = "FAILED_TO_REMOVE_PRODUCTS";
    /**
     * Unable to update products.
     */
    const FAILED_TO_UPDATE_PRODUCTS = "FAILED_TO_UPDATE_PRODUCTS";
    /**
     * An option linked to a metafield cannot be linked to a different metafield.
     */
    const LINKED_METAFIELD_CANNOT_BE_CHANGED = "LINKED_METAFIELD_CANNOT_BE_CHANGED";
    /**
     * Linked metafield value missing from `optionsAndValues` field.
     */
    const LINKED_METAFIELD_VALUE_MISSING = "LINKED_METAFIELD_VALUE_MISSING";
    /**
     * The same metafield cannot be linked to multiple options.
     */
    const LINKED_METAFIELDS_CANNOT_BE_REPEATED = "LINKED_METAFIELDS_CANNOT_BE_REPEATED";
    /**
     * Linked options are currently not supported for this shop.
     */
    const LINKED_OPTIONS_NOT_SUPPORTED_FOR_SHOP = "LINKED_OPTIONS_NOT_SUPPORTED_FOR_SHOP";
    /**
     * The optionsAndValues field is required for this operation.
     */
    const MISSING_OPTION_VALUES = "MISSING_OPTION_VALUES";
    /**
     * Selected option values cannot be empty.
     */
    const MUST_HAVE_SELECTED_OPTION_VALUES = "MUST_HAVE_SELECTED_OPTION_VALUES";
    /**
     * Unable to add products with blank option names.
     */
    const OPTION_NAME_CANNOT_BE_BLANK = "OPTION_NAME_CANNOT_BE_BLANK";
    /**
     * Option name contains invalid characters.
     */
    const OPTION_NAME_CONTAINS_INVALID_CHARACTERS = "OPTION_NAME_CONTAINS_INVALID_CHARACTERS";
    /**
     * Option does not exist.
     */
    const OPTION_NOT_FOUND = "OPTION_NOT_FOUND";
    /**
     * All child products must include the same options.
     */
    const OPTIONS_MUST_BE_EQUAL_TO_THE_OTHER_COMPONENTS = "OPTIONS_MUST_BE_EQUAL_TO_THE_OTHER_COMPONENTS";
    /**
     * Unable to update options with blank option values.
     */
    const OPTION_VALUES_CANNOT_BE_BLANK = "OPTION_VALUES_CANNOT_BE_BLANK";
    /**
     * Unable to update options with no option values.
     */
    const OPTION_VALUES_CANNOT_BE_EMPTY = "OPTION_VALUES_CANNOT_BE_EMPTY";
    /**
     * The options_and_values field must contain all option values used in the combined listing.
     */
    const OPTION_VALUES_MUST_BE_COMPLETE = "OPTION_VALUES_MUST_BE_COMPLETE";
    /**
     * Parent product cannot be a combined listing child.
     */
    const PARENT_PRODUCT_CANNOT_BE_COMBINED_LISTING_CHILD = "PARENT_PRODUCT_CANNOT_BE_COMBINED_LISTING_CHILD";
    /**
     * Unable to update components for a product that isn't a combined listing.
     */
    const PARENT_PRODUCT_MUST_BE_A_COMBINED_LISTING = "PARENT_PRODUCT_MUST_BE_A_COMBINED_LISTING";
    /**
     * The combined listing parent product must have a product category to use linked metafield options.
     */
    const PARENT_PRODUCT_MUST_HAVE_CATEGORY = "PARENT_PRODUCT_MUST_HAVE_CATEGORY";
    /**
     * Parent product not found.
     */
    const PARENT_PRODUCT_NOT_FOUND = "PARENT_PRODUCT_NOT_FOUND";
    /**
     * Unable to add a product that is already a child.
     */
    const PRODUCT_IS_ALREADY_A_CHILD = "PRODUCT_IS_ALREADY_A_CHILD";
    /**
     * Failed to remove membership due to invalid input.
     */
    const PRODUCT_MEMBERSHIP_NOT_FOUND = "PRODUCT_MEMBERSHIP_NOT_FOUND";
    /**
     * Unable to add products that do not exist.
     */
    const PRODUCT_NOT_FOUND = "PRODUCT_NOT_FOUND";
    /**
     * The title cannot be longer than 255 characters.
     */
    const TITLE_TOO_LONG = "TITLE_TOO_LONG";
    /**
     * You have reached the maximum number of variants across all products for an individual combined listing.
     */
    const TOO_MANY_VARIANTS = "TOO_MANY_VARIANTS";
    /**
     * You have reached the maximum number of products that can be added to an individual combined listing.
     */
    const TOO_MANY_PRODUCTS = "TOO_MANY_PRODUCTS";
    /**
     * An unexpected error occurred.
     */
    const UNEXPECTED_ERROR = "UNEXPECTED_ERROR";
}
