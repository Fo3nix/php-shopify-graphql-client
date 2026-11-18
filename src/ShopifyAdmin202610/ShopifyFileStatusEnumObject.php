<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible statuses for a file object.
 */
class ShopifyFileStatusEnumObject extends EnumObject
{
    /**
     * File has been uploaded but hasn't been processed.
     */
    const UPLOADED = "UPLOADED";
    /**
     * File is being processed.
     */
    const PROCESSING = "PROCESSING";
    /**
     * File is ready to be displayed.
     */
    const READY = "READY";
    /**
     * File processing has failed.
     */
    const FAILED = "FAILED";
}
