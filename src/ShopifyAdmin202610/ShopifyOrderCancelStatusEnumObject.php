<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Represents the status of the order's cancellation request.
 */
class ShopifyOrderCancelStatusEnumObject extends EnumObject
{
    /**
     * The order cancellation has been initiated.
     */
    const STARTED = "STARTED";
    /**
     * The order cancellation has been completed successfully.
     */
    const SUCCEEDED = "SUCCEEDED";
    /**
     * The order cancellation has failed.
     */
    const FAILED = "FAILED";
}
