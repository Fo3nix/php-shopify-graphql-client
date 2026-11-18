<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible content types for a media object.
 */
class ShopifyMediaContentTypeEnumObject extends EnumObject
{
    /**
     * A Shopify-hosted video.
     */
    const VIDEO = "VIDEO";
    /**
     * An externally hosted video.
     */
    const EXTERNAL_VIDEO = "EXTERNAL_VIDEO";
    /**
     * A 3d model.
     */
    const MODEL_3D = "MODEL_3D";
    /**
     * A Shopify-hosted image.
     */
    const IMAGE = "IMAGE";
}
