<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Error types for media.
 */
class ShopifyMediaErrorCodeEnumObject extends EnumObject
{
    /**
     * Media error has occurred for unknown reason.
     */
    const UNKNOWN = "UNKNOWN";
    /**
     * Media could not be processed because the signed URL was invalid.
     */
    const INVALID_SIGNED_URL = "INVALID_SIGNED_URL";
    /**
     * Media could not be processed because the image could not be downloaded.
     */
    const IMAGE_DOWNLOAD_FAILURE = "IMAGE_DOWNLOAD_FAILURE";
    /**
     * Media could not be processed because the image could not be processed.
     */
    const IMAGE_PROCESSING_FAILURE = "IMAGE_PROCESSING_FAILURE";
    /**
     * Media timed out because it is currently being modified by another operation.
     */
    const MEDIA_TIMEOUT_ERROR = "MEDIA_TIMEOUT_ERROR";
    /**
     * Media could not be created because the external video could not be found.
     */
    const EXTERNAL_VIDEO_NOT_FOUND = "EXTERNAL_VIDEO_NOT_FOUND";
    /**
     * Media could not be created because the external video is not listed or is private.
     */
    const EXTERNAL_VIDEO_UNLISTED = "EXTERNAL_VIDEO_UNLISTED";
    /**
     * Media could not be created because the external video has an invalid aspect ratio.
     */
    const EXTERNAL_VIDEO_INVALID_ASPECT_RATIO = "EXTERNAL_VIDEO_INVALID_ASPECT_RATIO";
    /**
     * Media could not be created because embed permissions are disabled for this video.
     */
    const EXTERNAL_VIDEO_EMBED_DISABLED = "EXTERNAL_VIDEO_EMBED_DISABLED";
    /**
     * Media could not be created because video is either not found or still transcoding.
     */
    const EXTERNAL_VIDEO_EMBED_NOT_FOUND_OR_TRANSCODING = "EXTERNAL_VIDEO_EMBED_NOT_FOUND_OR_TRANSCODING";
    /**
     * File could not be processed because the source could not be downloaded.
     */
    const GENERIC_FILE_DOWNLOAD_FAILURE = "GENERIC_FILE_DOWNLOAD_FAILURE";
    /**
     * File could not be created because the size is too large.
     */
    const GENERIC_FILE_INVALID_SIZE = "GENERIC_FILE_INVALID_SIZE";
    /**
     * Media could not be created because the metadata could not be read.
     */
    const VIDEO_METADATA_READ_ERROR = "VIDEO_METADATA_READ_ERROR";
    /**
     * Media could not be created because it has an invalid file type.
     */
    const VIDEO_INVALID_FILETYPE_ERROR = "VIDEO_INVALID_FILETYPE_ERROR";
    /**
     * Media could not be created because it does not meet the minimum width requirement.
     */
    const VIDEO_MIN_WIDTH_ERROR = "VIDEO_MIN_WIDTH_ERROR";
    /**
     * Media could not be created because it does not meet the maximum width requirement.
     */
    const VIDEO_MAX_WIDTH_ERROR = "VIDEO_MAX_WIDTH_ERROR";
    /**
     * Media could not be created because it does not meet the minimum height requirement.
     */
    const VIDEO_MIN_HEIGHT_ERROR = "VIDEO_MIN_HEIGHT_ERROR";
    /**
     * Media could not be created because it does not meet the maximum height requirement.
     */
    const VIDEO_MAX_HEIGHT_ERROR = "VIDEO_MAX_HEIGHT_ERROR";
    /**
     * Media could not be created because it does not meet the minimum duration requirement.
     */
    const VIDEO_MIN_DURATION_ERROR = "VIDEO_MIN_DURATION_ERROR";
    /**
     * Media could not be created because it does not meet the maximum duration requirement.
     */
    const VIDEO_MAX_DURATION_ERROR = "VIDEO_MAX_DURATION_ERROR";
    /**
     * Video failed validation.
     */
    const VIDEO_VALIDATION_ERROR = "VIDEO_VALIDATION_ERROR";
    /**
     * Model failed validation.
     */
    const MODEL3D_VALIDATION_ERROR = "MODEL3D_VALIDATION_ERROR";
    /**
     * Media could not be created because the model's thumbnail generation failed.
     */
    const MODEL3D_THUMBNAIL_GENERATION_ERROR = "MODEL3D_THUMBNAIL_GENERATION_ERROR";
    /**
     * There was an issue while trying to generate a new thumbnail.
     */
    const MODEL3D_THUMBNAIL_REGENERATION_ERROR = "MODEL3D_THUMBNAIL_REGENERATION_ERROR";
    /**
     * Media could not be created because the model can't be converted to USDZ format.
     */
    const MODEL3D_GLB_TO_USDZ_CONVERSION_ERROR = "MODEL3D_GLB_TO_USDZ_CONVERSION_ERROR";
    /**
     * Media could not be created because the model file failed processing.
     */
    const MODEL3D_GLB_OUTPUT_CREATION_ERROR = "MODEL3D_GLB_OUTPUT_CREATION_ERROR";
    /**
     * Media could not be created because the model file failed processing.
     */
    const MODEL3D_PROCESSING_FAILURE = "MODEL3D_PROCESSING_FAILURE";
    /**
     * Media could not be created because the image is an unsupported file type.
     */
    const UNSUPPORTED_IMAGE_FILE_TYPE = "UNSUPPORTED_IMAGE_FILE_TYPE";
    /**
     * Media could not be created because the image size is too large.
     */
    const INVALID_IMAGE_FILE_SIZE = "INVALID_IMAGE_FILE_SIZE";
    /**
     * Media could not be created because the image has an invalid aspect ratio.
     */
    const INVALID_IMAGE_ASPECT_RATIO = "INVALID_IMAGE_ASPECT_RATIO";
    /**
     * Media could not be created because the image's resolution exceeds the max limit.
     */
    const INVALID_IMAGE_RESOLUTION = "INVALID_IMAGE_RESOLUTION";
    /**
     * Media could not be created because the cumulative file storage limit would be exceeded.
     */
    const FILE_STORAGE_LIMIT_EXCEEDED = "FILE_STORAGE_LIMIT_EXCEEDED";
    /**
     * Media could not be created because a file with the same name already exists.
     */
    const DUPLICATE_FILENAME_ERROR = "DUPLICATE_FILENAME_ERROR";
}
