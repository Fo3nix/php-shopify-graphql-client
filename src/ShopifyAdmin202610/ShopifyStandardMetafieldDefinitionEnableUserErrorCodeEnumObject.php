<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `StandardMetafieldDefinitionEnableUserError`.
 */
class ShopifyStandardMetafieldDefinitionEnableUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The input value is already taken.
     */
    const TAKEN = "TAKEN";
    /**
     * The standard metafield definition template was not found.
     */
    const TEMPLATE_NOT_FOUND = "TEMPLATE_NOT_FOUND";
    /**
     * The maximum number of definitions per owner type has been exceeded.
     */
    const LIMIT_EXCEEDED = "LIMIT_EXCEEDED";
    /**
     * The namespace and key is already in use for a set of your metafields.
     */
    const UNSTRUCTURED_ALREADY_EXISTS = "UNSTRUCTURED_ALREADY_EXISTS";
    /**
     * The definition type is not eligible to be used as collection condition.
     */
    const TYPE_NOT_ALLOWED_FOR_CONDITIONS = "TYPE_NOT_ALLOWED_FOR_CONDITIONS";
    /**
     * The metafield definition capability is invalid.
     */
    const INVALID_CAPABILITY = "INVALID_CAPABILITY";
    /**
     * The metafield definition capability cannot be disabled.
     */
    const CAPABILITY_CANNOT_BE_DISABLED = "CAPABILITY_CANNOT_BE_DISABLED";
    /**
     * You have reached the maximum allowed definitions to be used as admin filters.
     */
    const OWNER_TYPE_LIMIT_EXCEEDED_FOR_USE_AS_ADMIN_FILTERS = "OWNER_TYPE_LIMIT_EXCEEDED_FOR_USE_AS_ADMIN_FILTERS";
    /**
     * The associated standard metaobject definition template is not valid for the metafield definition and prevented enabling it.
     */
    const INVALID_STANDARD_METAOBJECT = "INVALID_STANDARD_METAOBJECT";
    /**
     * The metafield definition does not support pinning.
     */
    const UNSUPPORTED_PINNING = "UNSUPPORTED_PINNING";
    /**
     * Admin access can only be specified for app-owned metafield definitions.
     */
    const ADMIN_ACCESS_INPUT_NOT_ALLOWED = "ADMIN_ACCESS_INPUT_NOT_ALLOWED";
    /**
     * The input combination is invalid.
     */
    const INVALID_INPUT_COMBINATION = "INVALID_INPUT_COMBINATION";
}
