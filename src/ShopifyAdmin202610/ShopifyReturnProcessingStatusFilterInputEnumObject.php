<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Filter line items based on processing status.
 */
class ShopifyReturnProcessingStatusFilterInputEnumObject extends EnumObject
{
    /**
     * Only include line items that have been processed.
     */
    const PROCESSED = "PROCESSED";
    /**
     * Only include line items that have some processable quantity.
     */
    const PROCESSABLE = "PROCESSABLE";
}
