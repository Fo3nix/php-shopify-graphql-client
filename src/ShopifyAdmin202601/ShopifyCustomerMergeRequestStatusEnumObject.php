<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The status of the customer merge request.
 */
class ShopifyCustomerMergeRequestStatusEnumObject extends EnumObject
{
    /**
     * The customer merge request has been requested.
     */
    const REQUESTED = "REQUESTED";
    /**
     * The customer merge request is currently in progress.
     */
    const IN_PROGRESS = "IN_PROGRESS";
    /**
     * The customer merge request has been completed.
     */
    const COMPLETED = "COMPLETED";
    /**
     * The customer merge request has failed.
     */
    const FAILED = "FAILED";
}
