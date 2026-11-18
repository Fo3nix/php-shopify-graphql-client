<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Host for a Media Resource.
 */
class ShopifyMediaHostEnumObject extends EnumObject
{
    /**
     * Host for YouTube embedded videos.
     */
    const YOUTUBE = "YOUTUBE";
    /**
     * Host for Vimeo embedded videos.
     */
    const VIMEO = "VIMEO";
}
