<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `OnlineStoreThemeFilesUserErrors`.
 */
class ShopifyOnlineStoreThemeFilesUserErrorsCodeEnumObject extends EnumObject
{
    /**
     * The record with the ID used as the input value couldn't be found.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * The input value should be less than or equal to the maximum value allowed.
     */
    const LESS_THAN_OR_EQUAL_TO = "LESS_THAN_OR_EQUAL_TO";
    /**
     * There are theme files with conflicts.
     */
    const THEME_FILES_CONFLICT = "THEME_FILES_CONFLICT";
    /**
     * There are files with the same filename.
     */
    const DUPLICATE_FILE_INPUT = "DUPLICATE_FILE_INPUT";
    /**
     * Access denied.
     */
    const ACCESS_DENIED = "ACCESS_DENIED";
    /**
     * This action is not available on your current plan. Please upgrade to access theme editing features.
     */
    const THEME_LIMITED_PLAN = "THEME_LIMITED_PLAN";
    /**
     * Theme contextualization and condition types are not compatible with each other.
     */
    const THEME_CONTEXTUALIZATION_NOT_COMPATIBLE_WITH_CONDITION_TYPES = "THEME_CONTEXTUALIZATION_NOT_COMPATIBLE_WITH_CONDITION_TYPES";
    /**
     * The file is invalid.
     */
    const FILE_VALIDATION_ERROR = "FILE_VALIDATION_ERROR";
    /**
     * Error.
     */
    const ERROR = "ERROR";
    /**
     * Too many updates in a short period. Please try again later.
     */
    const THROTTLED = "THROTTLED";
}
