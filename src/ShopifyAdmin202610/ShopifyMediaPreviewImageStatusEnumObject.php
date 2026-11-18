<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible statuses for a media preview image.
 */
class ShopifyMediaPreviewImageStatusEnumObject extends EnumObject
{
    /**
     * Preview image is uploaded but not yet processed.
     */
    const UPLOADED = "UPLOADED";
    /**
     * Preview image is being processed.
     */
    const PROCESSING = "PROCESSING";
    /**
     * Preview image is ready to be displayed.
     */
    const READY = "READY";
    /**
     * Preview image processing has failed.
     */
    const FAILED = "FAILED";
}
