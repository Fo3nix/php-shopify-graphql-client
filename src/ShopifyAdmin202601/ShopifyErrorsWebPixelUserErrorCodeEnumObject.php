<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ErrorsWebPixelUserError`.
 */
class ShopifyErrorsWebPixelUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * The input value is already taken.
     */
    const TAKEN = "TAKEN";
    /**
     * The record with the ID used as the input value couldn't be found.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * The provided settings does not match the expected settings definition on the app.
     */
    const INVALID_SETTINGS = "INVALID_SETTINGS";
    /**
     * No extension found.
     */
    const NO_EXTENSION = "NO_EXTENSION";
    /**
     * The provided settings is not a valid JSON.
     */
    const INVALID_CONFIGURATION_JSON = "INVALID_CONFIGURATION_JSON";
    /**
     * The settings definition of the web pixel extension is in an invalid state on the app.
     */
    const INVALID_SETTINGS_DEFINITION = "INVALID_SETTINGS_DEFINITION";
    /**
     * An unexpected error occurred.
     */
    const UNEXPECTED_ERROR = "UNEXPECTED_ERROR";
    /**
     * The provided runtime context is invalid.
     */
    const INVALID_RUNTIME_CONTEXT = "INVALID_RUNTIME_CONTEXT";
}
