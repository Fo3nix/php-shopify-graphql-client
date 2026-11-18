<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `MetafieldDefinitionCreateUserError`.
 */
class ShopifyMetafieldDefinitionCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The input value isn't included in the list.
     */
    const INCLUSION = "INCLUSION";
    /**
     * The input value needs to be blank.
     */
    const PRESENT = "PRESENT";
    /**
     * The input value is already taken.
     */
    const TAKEN = "TAKEN";
    /**
     * The input value is too long.
     */
    const TOO_LONG = "TOO_LONG";
    /**
     * The input value is too short.
     */
    const TOO_SHORT = "TOO_SHORT";
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * A capability is required for the definition type but is disabled.
     */
    const CAPABILITY_REQUIRED_BUT_DISABLED = "CAPABILITY_REQUIRED_BUT_DISABLED";
    /**
     * The definition limit per owner type has exceeded.
     */
    const RESOURCE_TYPE_LIMIT_EXCEEDED = "RESOURCE_TYPE_LIMIT_EXCEEDED";
    /**
     * The definition limit per owner type for the app has exceeded.
     */
    const RESOURCE_TYPE_LIMIT_EXCEEDED_BY_APP = "RESOURCE_TYPE_LIMIT_EXCEEDED_BY_APP";
    /**
     * The maximum limit of definitions per owner type has exceeded.
     */
    const LIMIT_EXCEEDED = "LIMIT_EXCEEDED";
    /**
     * An invalid option.
     */
    const INVALID_OPTION = "INVALID_OPTION";
    /**
     * A duplicate option.
     */
    const DUPLICATE_OPTION = "DUPLICATE_OPTION";
    /**
     * This namespace and key combination is reserved for standard definitions.
     */
    const RESERVED_NAMESPACE_KEY = "RESERVED_NAMESPACE_KEY";
    /**
     * The pinned limit has been reached for the owner type.
     */
    const PINNED_LIMIT_REACHED = "PINNED_LIMIT_REACHED";
    /**
     * This namespace and key combination is already in use for a set of your metafields.
     */
    const UNSTRUCTURED_ALREADY_EXISTS = "UNSTRUCTURED_ALREADY_EXISTS";
    /**
     * The metafield definition does not support pinning.
     */
    const UNSUPPORTED_PINNING = "UNSUPPORTED_PINNING";
    /**
     * A field contains an invalid character.
     */
    const INVALID_CHARACTER = "INVALID_CHARACTER";
    /**
     * The definition type is not eligible to be used as collection condition.
     */
    const TYPE_NOT_ALLOWED_FOR_CONDITIONS = "TYPE_NOT_ALLOWED_FOR_CONDITIONS";
    /**
     * You have reached the maximum allowed definitions for automated collections.
     */
    const OWNER_TYPE_LIMIT_EXCEEDED_FOR_AUTOMATED_COLLECTIONS = "OWNER_TYPE_LIMIT_EXCEEDED_FOR_AUTOMATED_COLLECTIONS";
    /**
     * You have reached the maximum allowed definitions to be used as admin filters.
     */
    const OWNER_TYPE_LIMIT_EXCEEDED_FOR_USE_AS_ADMIN_FILTERS = "OWNER_TYPE_LIMIT_EXCEEDED_FOR_USE_AS_ADMIN_FILTERS";
    /**
     * The metafield definition constraints are invalid.
     */
    const INVALID_CONSTRAINTS = "INVALID_CONSTRAINTS";
    /**
     * The input combination is invalid.
     */
    const INVALID_INPUT_COMBINATION = "INVALID_INPUT_COMBINATION";
    /**
     * The metafield definition capability is invalid.
     */
    const INVALID_CAPABILITY = "INVALID_CAPABILITY";
    /**
     * Admin access can only be specified for app-owned metafield definitions.
     */
    const ADMIN_ACCESS_INPUT_NOT_ALLOWED = "ADMIN_ACCESS_INPUT_NOT_ALLOWED";
}
