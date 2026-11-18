<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ProductSetUserError`.
 */
class ShopifyProductSetUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The id field is not allowed if identifier is provided.
     */
    const ID_NOT_ALLOWED = "ID_NOT_ALLOWED";
    /**
     * The input field corresponding to the identifier is required.
     */
    const MISSING_FIELD_REQUIRED = "MISSING_FIELD_REQUIRED";
    /**
     * The identifier value does not match the value of the corresponding field in the input.
     */
    const INPUT_MISMATCH = "INPUT_MISMATCH";
    /**
     * Resource matching the identifier was not found.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * The input argument `metafields` (if present) must contain the `customId` value.
     */
    const METAFIELD_MISMATCH = "METAFIELD_MISMATCH";
    /**
     * Something went wrong, please try again.
     */
    const GENERIC_ERROR = "GENERIC_ERROR";
    /**
     * Metafield is not valid.
     */
    const INVALID_METAFIELD = "INVALID_METAFIELD";
    /**
     * Product variant is not valid.
     */
    const INVALID_VARIANT = "INVALID_VARIANT";
    /**
     * Product does not exist.
     */
    const PRODUCT_DOES_NOT_EXIST = "PRODUCT_DOES_NOT_EXIST";
    /**
     * Product is suspended.
     */
    const PRODUCT_SUSPENDED = "PRODUCT_SUSPENDED";
    /**
     * Product variant does not exist.
     */
    const PRODUCT_VARIANT_DOES_NOT_EXIST = "PRODUCT_VARIANT_DOES_NOT_EXIST";
    /**
     * Option does not exist.
     */
    const OPTION_DOES_NOT_EXIST = "OPTION_DOES_NOT_EXIST";
    /**
     * Option value does not exist.
     */
    const OPTION_VALUE_DOES_NOT_EXIST = "OPTION_VALUE_DOES_NOT_EXIST";
    /**
     * Options over limit.
     */
    const OPTIONS_OVER_LIMIT = "OPTIONS_OVER_LIMIT";
    /**
     * Option values over limit.
     */
    const OPTION_VALUES_OVER_LIMIT = "OPTION_VALUES_OVER_LIMIT";
    /**
     * Each option must have at least one option value specified.
     */
    const OPTION_VALUES_MISSING = "OPTION_VALUES_MISSING";
    /**
     * Duplicated option name.
     */
    const DUPLICATED_OPTION_NAME = "DUPLICATED_OPTION_NAME";
    /**
     * Duplicated option value.
     */
    const DUPLICATED_OPTION_VALUE = "DUPLICATED_OPTION_VALUE";
    /**
     * Number of product variants exceeds shop limit.
     */
    const VARIANTS_OVER_LIMIT = "VARIANTS_OVER_LIMIT";
    /**
     * Must specify product options when updating variants.
     */
    const PRODUCT_OPTIONS_INPUT_MISSING = "PRODUCT_OPTIONS_INPUT_MISSING";
    /**
     * Must specify variants when updating options.
     */
    const VARIANTS_INPUT_MISSING = "VARIANTS_INPUT_MISSING";
    /**
     * Gift card products can only be created after they have been activated.
     */
    const GIFT_CARDS_NOT_ACTIVATED = "GIFT_CARDS_NOT_ACTIVATED";
    /**
     * The product gift_card attribute cannot be changed after creation.
     */
    const GIFT_CARD_ATTRIBUTE_CANNOT_BE_CHANGED = "GIFT_CARD_ATTRIBUTE_CANNOT_BE_CHANGED";
    /**
     * Product is not valid.
     */
    const INVALID_PRODUCT = "INVALID_PRODUCT";
    /**
     * Input is not valid.
     */
    const INVALID_INPUT = "INVALID_INPUT";
    /**
     * Error processing request in the background job.
     */
    const JOB_ERROR = "JOB_ERROR";
    /**
     * The metafield violates a capability restriction.
     */
    const CAPABILITY_VIOLATION = "CAPABILITY_VIOLATION";
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
     * Duplicated metafield value for linked option.
     */
    const DUPLICATED_METAFIELD_VALUE = "DUPLICATED_METAFIELD_VALUE";
    /**
     * Linked options are currently not supported for this shop.
     */
    const LINKED_OPTIONS_NOT_SUPPORTED_FOR_SHOP = "LINKED_OPTIONS_NOT_SUPPORTED_FOR_SHOP";
    /**
     * No valid metafield definition found for linked option.
     */
    const LINKED_METAFIELD_DEFINITION_NOT_FOUND = "LINKED_METAFIELD_DEFINITION_NOT_FOUND";
    /**
     * Duplicated value.
     */
    const DUPLICATED_VALUE = "DUPLICATED_VALUE";
    /**
     * Handle already in use. Please provide a new handle.
     */
    const HANDLE_NOT_UNIQUE = "HANDLE_NOT_UNIQUE";
    /**
     * Inventory quantity input exceeds the limit of 50000. Consider using separate `inventorySetQuantities` mutations.
     */
    const INVENTORY_QUANTITIES_LIMIT_EXCEEDED = "INVENTORY_QUANTITIES_LIMIT_EXCEEDED";
}
