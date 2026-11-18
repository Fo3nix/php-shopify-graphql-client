<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `MediaUserError`.
 */
class ShopifyMediaUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * Video validation failed.
     */
    const VIDEO_VALIDATION_ERROR = "VIDEO_VALIDATION_ERROR";
    /**
     * Model validation failed.
     */
    const MODEL3D_VALIDATION_ERROR = "MODEL3D_VALIDATION_ERROR";
    /**
     * Video creation throttle was exceeded.
     */
    const VIDEO_THROTTLE_EXCEEDED = "VIDEO_THROTTLE_EXCEEDED";
    /**
     * Model3d creation throttle was exceeded.
     */
    const MODEL3D_THROTTLE_EXCEEDED = "MODEL3D_THROTTLE_EXCEEDED";
    /**
     * Exceeded the limit of media per product.
     */
    const PRODUCT_MEDIA_LIMIT_EXCEEDED = "PRODUCT_MEDIA_LIMIT_EXCEEDED";
    /**
     * Exceeded the limit of media per shop.
     */
    const SHOP_MEDIA_LIMIT_EXCEEDED = "SHOP_MEDIA_LIMIT_EXCEEDED";
    /**
     * Product does not exist.
     */
    const PRODUCT_DOES_NOT_EXIST = "PRODUCT_DOES_NOT_EXIST";
    /**
     * Media does not exist.
     */
    const MEDIA_DOES_NOT_EXIST = "MEDIA_DOES_NOT_EXIST";
    /**
     * Media does not exist on the given product.
     */
    const MEDIA_DOES_NOT_EXIST_ON_PRODUCT = "MEDIA_DOES_NOT_EXIST_ON_PRODUCT";
    /**
     * Only one mediaId is allowed per variant-media input pair.
     */
    const TOO_MANY_MEDIA_PER_INPUT_PAIR = "TOO_MANY_MEDIA_PER_INPUT_PAIR";
    /**
     * Exceeded the maximum number of 100 variant-media pairs per mutation call.
     */
    const MAXIMUM_VARIANT_MEDIA_PAIRS_EXCEEDED = "MAXIMUM_VARIANT_MEDIA_PAIRS_EXCEEDED";
    /**
     * Invalid media type.
     */
    const INVALID_MEDIA_TYPE = "INVALID_MEDIA_TYPE";
    /**
     * Variant specified in more than one pair.
     */
    const PRODUCT_VARIANT_SPECIFIED_MULTIPLE_TIMES = "PRODUCT_VARIANT_SPECIFIED_MULTIPLE_TIMES";
    /**
     * Variant does not exist on the given product.
     */
    const PRODUCT_VARIANT_DOES_NOT_EXIST_ON_PRODUCT = "PRODUCT_VARIANT_DOES_NOT_EXIST_ON_PRODUCT";
    /**
     * Non-ready media are not supported.
     */
    const NON_READY_MEDIA = "NON_READY_MEDIA";
    /**
     * Product variant already has attached media.
     */
    const PRODUCT_VARIANT_ALREADY_HAS_MEDIA = "PRODUCT_VARIANT_ALREADY_HAS_MEDIA";
    /**
     * The specified media is not attached to the specified variant.
     */
    const MEDIA_IS_NOT_ATTACHED_TO_VARIANT = "MEDIA_IS_NOT_ATTACHED_TO_VARIANT";
    /**
     * Media cannot be modified. It is currently being modified by another operation.
     */
    const MEDIA_CANNOT_BE_MODIFIED = "MEDIA_CANNOT_BE_MODIFIED";
    /**
     * Product is suspended.
     */
    const PRODUCT_SUSPENDED = "PRODUCT_SUSPENDED";
    /**
     * Missing arguments.
     */
    const MISSING_ARGUMENTS = "MISSING_ARGUMENTS";
}
