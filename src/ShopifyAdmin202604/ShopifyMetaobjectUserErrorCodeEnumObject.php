<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `MetaobjectUserError`.
 */
class ShopifyMetaobjectUserErrorCodeEnumObject extends EnumObject
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
     * The input value needs to be blank.
     */
    const PRESENT = "PRESENT";
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * The metafield type is invalid.
     */
    const INVALID_TYPE = "INVALID_TYPE";
    /**
     * The value is invalid for the metafield type or the definition options.
     */
    const INVALID_VALUE = "INVALID_VALUE";
    /**
     * The value for the metafield definition option was invalid.
     */
    const INVALID_OPTION = "INVALID_OPTION";
    /**
     * Duplicate inputs were provided for this field key.
     */
    const DUPLICATE_FIELD_INPUT = "DUPLICATE_FIELD_INPUT";
    /**
     * No metaobject definition found for this type.
     */
    const UNDEFINED_OBJECT_TYPE = "UNDEFINED_OBJECT_TYPE";
    /**
     * No field definition found for this key.
     */
    const UNDEFINED_OBJECT_FIELD = "UNDEFINED_OBJECT_FIELD";
    /**
     * The specified field key is already in use.
     */
    const OBJECT_FIELD_TAKEN = "OBJECT_FIELD_TAKEN";
    /**
     * Missing required fields were found for this object.
     */
    const OBJECT_FIELD_REQUIRED = "OBJECT_FIELD_REQUIRED";
    /**
     * The requested record couldn't be found.
     */
    const RECORD_NOT_FOUND = "RECORD_NOT_FOUND";
    /**
     * An unexpected error occurred.
     */
    const INTERNAL_ERROR = "INTERNAL_ERROR";
    /**
     * The maximum number of metaobjects definitions has been exceeded.
     */
    const MAX_DEFINITIONS_EXCEEDED = "MAX_DEFINITIONS_EXCEEDED";
    /**
     * The maximum number of metaobjects per shop has been exceeded.
     */
    const MAX_OBJECTS_EXCEEDED = "MAX_OBJECTS_EXCEEDED";
    /**
     * The maximum number of input metaobjects has been exceeded.
     */
    const INPUT_LIMIT_EXCEEDED = "INPUT_LIMIT_EXCEEDED";
    /**
     * The targeted object cannot be modified.
     */
    const IMMUTABLE = "IMMUTABLE";
    /**
     * Not authorized.
     */
    const NOT_AUTHORIZED = "NOT_AUTHORIZED";
    /**
     * The provided name is reserved for system use.
     */
    const RESERVED_NAME = "RESERVED_NAME";
    /**
     * The display name cannot be the same when using the metaobject as a product option.
     */
    const DISPLAY_NAME_CONFLICT = "DISPLAY_NAME_CONFLICT";
    /**
     * Admin access can only be specified on metaobject definitions that have an app-reserved type.
     */
    const ADMIN_ACCESS_INPUT_NOT_ALLOWED = "ADMIN_ACCESS_INPUT_NOT_ALLOWED";
    /**
     * Definition is managed by app configuration and cannot be modified through the API.
     */
    const APP_CONFIG_MANAGED = "APP_CONFIG_MANAGED";
    /**
     * Definition is required by an installed app and cannot be deleted.
     */
    const STANDARD_METAOBJECT_DEFINITION_DEPENDENT_ON_APP = "STANDARD_METAOBJECT_DEFINITION_DEPENDENT_ON_APP";
    /**
     * The capability you are using is not enabled.
     */
    const CAPABILITY_NOT_ENABLED = "CAPABILITY_NOT_ENABLED";
    /**
     * The Online Store URL handle is already taken.
     */
    const URL_HANDLE_TAKEN = "URL_HANDLE_TAKEN";
    /**
     * The Online Store URL handle is invalid.
     */
    const URL_HANDLE_INVALID = "URL_HANDLE_INVALID";
    /**
     * The Online Store URL handle cannot be blank.
     */
    const URL_HANDLE_BLANK = "URL_HANDLE_BLANK";
    /**
     * Renderable data input is referencing an invalid field.
     */
    const FIELD_TYPE_INVALID = "FIELD_TYPE_INVALID";
    /**
     * The input is missing required keys.
     */
    const MISSING_REQUIRED_KEYS = "MISSING_REQUIRED_KEYS";
    /**
     * The action cannot be completed because associated metaobjects are referenced by another resource.
     */
    const REFERENCE_EXISTS_ERROR = "REFERENCE_EXISTS_ERROR";
}
