<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Warning types for media.
 */
class ShopifyMediaWarningCodeEnumObject extends EnumObject
{
    /**
     * 3D model physical size might be invalid. The dimensions of your model are very small. Consider reviewing your model to ensure they are correct.
     */
    const MODEL_SMALL_PHYSICAL_SIZE = "MODEL_SMALL_PHYSICAL_SIZE";
    /**
     * 3D model physical size might be invalid. The dimensions of your model are very large. Consider reviewing your model to ensure they are correct.
     */
    const MODEL_LARGE_PHYSICAL_SIZE = "MODEL_LARGE_PHYSICAL_SIZE";
    /**
     * The thumbnail failed to regenerate.Try applying the changes again to regenerate the thumbnail.
     */
    const MODEL_PREVIEW_IMAGE_FAIL = "MODEL_PREVIEW_IMAGE_FAIL";
}
