<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible content types for a file object.
 */
class ShopifyFileContentTypeEnumObject extends EnumObject
{
    /**
     * A Shopify-hosted image.
     */
    const IMAGE = "IMAGE";
    /**
     * A Shopify-hosted generic file.
     */
    const FILE = "FILE";
    /**
     * A Shopify-hosted video file. It's recommended to use this type for all video files.
     */
    const VIDEO = "VIDEO";
    /**
     * An externally hosted video.
     */
    const EXTERNAL_VIDEO = "EXTERNAL_VIDEO";
    /**
     * A Shopify-hosted 3D model.
     */
    const MODEL_3D = "MODEL_3D";
}
