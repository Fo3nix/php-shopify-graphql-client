<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible statuses for a media object.
 */
class ShopifyMediaStatusEnumObject extends EnumObject
{
    /**
     * Media has been uploaded but not yet processed.
     */
    const UPLOADED = "UPLOADED";
    /**
     * Media is being processed.
     */
    const PROCESSING = "PROCESSING";
    /**
     * Media is ready to be displayed.
     */
    const READY = "READY";
    /**
     * Media processing has failed.
     */
    const FAILED = "FAILED";
}
