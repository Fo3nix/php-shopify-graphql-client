<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `MetafieldDefinitionUpdateUserError`.
 */
class ShopifyMetafieldDefinitionUpdateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value needs to be blank.
     */
    const PRESENT = "PRESENT";
    /**
     * The input value is too long.
     */
    const TOO_LONG = "TOO_LONG";
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The metafield definition wasn't found.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * An invalid input.
     */
    const INVALID_INPUT = "INVALID_INPUT";
    /**
     * A capability is required for the definition type but is disabled.
     */
    const CAPABILITY_REQUIRED_BUT_DISABLED = "CAPABILITY_REQUIRED_BUT_DISABLED";
    /**
     * The pinned limit has been reached for the owner type.
     */
    const PINNED_LIMIT_REACHED = "PINNED_LIMIT_REACHED";
    /**
     * An internal error occurred.
     */
    const INTERNAL_ERROR = "INTERNAL_ERROR";
    /**
     * The metafield definition does not support pinning.
     */
    const UNSUPPORTED_PINNING = "UNSUPPORTED_PINNING";
    /**
     * An invalid option.
     */
    const INVALID_OPTION = "INVALID_OPTION";
    /**
     * A duplicate option.
     */
    const DUPLICATE_OPTION = "DUPLICATE_OPTION";
    /**
     * The definition type is not eligible to be used as collection condition.
     */
    const TYPE_NOT_ALLOWED_FOR_CONDITIONS = "TYPE_NOT_ALLOWED_FOR_CONDITIONS";
    /**
     * Action cannot proceed. Definition is currently in use.
     */
    const METAFIELD_DEFINITION_IN_USE = "METAFIELD_DEFINITION_IN_USE";
    /**
     * You have reached the maximum allowed definitions for automated collections.
     */
    const OWNER_TYPE_LIMIT_EXCEEDED_FOR_AUTOMATED_COLLECTIONS = "OWNER_TYPE_LIMIT_EXCEEDED_FOR_AUTOMATED_COLLECTIONS";
    /**
     * You have reached the maximum allowed definitions to be used as admin filters.
     */
    const OWNER_TYPE_LIMIT_EXCEEDED_FOR_USE_AS_ADMIN_FILTERS = "OWNER_TYPE_LIMIT_EXCEEDED_FOR_USE_AS_ADMIN_FILTERS";
    /**
     * You cannot change the metaobject definition pointed to by a metaobject reference metafield definition.
     */
    const METAOBJECT_DEFINITION_CHANGED = "METAOBJECT_DEFINITION_CHANGED";
    /**
     * Owner type can't be used in this mutation.
     */
    const DISALLOWED_OWNER_TYPE = "DISALLOWED_OWNER_TYPE";
    /**
     * The input combination is invalid.
     */
    const INVALID_INPUT_COMBINATION = "INVALID_INPUT_COMBINATION";
    /**
     * The metafield definition constraints are invalid.
     */
    const INVALID_CONSTRAINTS = "INVALID_CONSTRAINTS";
    /**
     * The metafield definition capability is invalid.
     */
    const INVALID_CAPABILITY = "INVALID_CAPABILITY";
    /**
     * The metafield definition capability cannot be disabled.
     */
    const CAPABILITY_CANNOT_BE_DISABLED = "CAPABILITY_CANNOT_BE_DISABLED";
    /**
     * Admin access can only be specified for app-owned metafield definitions.
     */
    const ADMIN_ACCESS_INPUT_NOT_ALLOWED = "ADMIN_ACCESS_INPUT_NOT_ALLOWED";
    /**
     * Definition is managed by app configuration and cannot be modified through the API.
     */
    const APP_CONFIG_MANAGED = "APP_CONFIG_MANAGED";
}
