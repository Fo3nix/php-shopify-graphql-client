<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `FilesUserError`.
 */
class ShopifyFilesErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * File does not exist.
     */
    const FILE_DOES_NOT_EXIST = "FILE_DOES_NOT_EXIST";
    /**
     * File has a pending operation.
     */
    const FILE_LOCKED = "FILE_LOCKED";
    /**
     * Filename update is only supported on Image and GenericFile.
     */
    const UNSUPPORTED_MEDIA_TYPE_FOR_FILENAME_UPDATE = "UNSUPPORTED_MEDIA_TYPE_FOR_FILENAME_UPDATE";
    /**
     * Specify one argument: search, IDs, or deleteAll.
     */
    const TOO_MANY_ARGUMENTS = "TOO_MANY_ARGUMENTS";
    /**
     * The search term must not be blank.
     */
    const BLANK_SEARCH = "BLANK_SEARCH";
    /**
     * At least one argument is required.
     */
    const MISSING_ARGUMENTS = "MISSING_ARGUMENTS";
    /**
     * Search query isn't supported.
     */
    const INVALID_QUERY = "INVALID_QUERY";
    /**
     * One or more associated products are suspended.
     */
    const PRODUCT_SUSPENDED = "PRODUCT_SUSPENDED";
    /**
     * Invalid filename extension.
     */
    const INVALID_FILENAME_EXTENSION = "INVALID_FILENAME_EXTENSION";
    /**
     * The provided filename is invalid.
     */
    const INVALID_FILENAME = "INVALID_FILENAME";
    /**
     * The provided filename already exists.
     */
    const FILENAME_ALREADY_EXISTS = "FILENAME_ALREADY_EXISTS";
    /**
     * The file is not supported on trial accounts that have not validated their email. Either select a plan or verify the shop owner email to upload this file.
     */
    const UNACCEPTABLE_UNVERIFIED_TRIAL_ASSET = "UNACCEPTABLE_UNVERIFIED_TRIAL_ASSET";
    /**
     * The file type is not supported.
     */
    const UNACCEPTABLE_ASSET = "UNACCEPTABLE_ASSET";
    /**
     * The file is not supported on trial accounts. Select a plan to upload this file.
     */
    const UNACCEPTABLE_TRIAL_ASSET = "UNACCEPTABLE_TRIAL_ASSET";
    /**
     * The alt value exceeds the maximum limit of 512 characters.
     */
    const ALT_VALUE_LIMIT_EXCEEDED = "ALT_VALUE_LIMIT_EXCEEDED";
    /**
     * The file is not in the READY state.
     */
    const NON_READY_STATE = "NON_READY_STATE";
    /**
     * File cannot be updated in a failed state.
     */
    const INVALID_FAILED_MEDIA_STATE = "INVALID_FAILED_MEDIA_STATE";
    /**
     * Exceeded the limit of non-image media per shop.
     */
    const NON_IMAGE_MEDIA_PER_SHOP_LIMIT_EXCEEDED = "NON_IMAGE_MEDIA_PER_SHOP_LIMIT_EXCEEDED";
    /**
     * Cannot create file with custom filename which does not match original source extension.
     */
    const MISMATCHED_FILENAME_AND_ORIGINAL_SOURCE = "MISMATCHED_FILENAME_AND_ORIGINAL_SOURCE";
    /**
     * Duplicate resolution mode is not supported for this file type.
     */
    const INVALID_DUPLICATE_MODE_FOR_TYPE = "INVALID_DUPLICATE_MODE_FOR_TYPE";
    /**
     * Invalid image source url value provided.
     */
    const INVALID_IMAGE_SOURCE_URL = "INVALID_IMAGE_SOURCE_URL";
    /**
     * Duplicate resolution mode REPLACE cannot be used without specifying filename.
     */
    const MISSING_FILENAME_FOR_DUPLICATE_MODE_REPLACE = "MISSING_FILENAME_FOR_DUPLICATE_MODE_REPLACE";
    /**
     * Exceeded the limit of media per product.
     */
    const PRODUCT_MEDIA_LIMIT_EXCEEDED = "PRODUCT_MEDIA_LIMIT_EXCEEDED";
    /**
     * The file type is not supported for referencing.
     */
    const UNSUPPORTED_FILE_REFERENCE = "UNSUPPORTED_FILE_REFERENCE";
    /**
     * The target resource does not exist.
     */
    const REFERENCE_TARGET_DOES_NOT_EXIST = "REFERENCE_TARGET_DOES_NOT_EXIST";
    /**
     * Cannot add more than 10000 references to a file.
     */
    const TOO_MANY_FILE_REFERENCE = "TOO_MANY_FILE_REFERENCE";
    /**
     * Invalid duplicate resolution mode provided.
     */
    const INVALID_DUPLICATE_RESOLUTION_MODE = "INVALID_DUPLICATE_RESOLUTION_MODE";
    /**
     * Media cannot be modified. It is currently being modified by another operation.
     */
    const MEDIA_CANNOT_BE_MODIFIED = "MEDIA_CANNOT_BE_MODIFIED";
}
