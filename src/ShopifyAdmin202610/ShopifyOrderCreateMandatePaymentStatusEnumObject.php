<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Represents the status of a mandate payment request.
 */
class ShopifyOrderCreateMandatePaymentStatusEnumObject extends EnumObject
{
    /**
     * The mandate payment request has been initiated.
     */
    const STARTED = "STARTED";
    /**
     * The mandate payment has been completed successfully.
     */
    const SUCCEEDED = "SUCCEEDED";
    /**
     * The mandate payment has failed.
     */
    const FAILED = "FAILED";
}
