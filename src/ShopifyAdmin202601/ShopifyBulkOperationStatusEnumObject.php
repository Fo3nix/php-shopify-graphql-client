<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The valid values for the status of a bulk operation.
 */
class ShopifyBulkOperationStatusEnumObject extends EnumObject
{
    /**
     * The bulk operation has been canceled.
     */
    const CANCELED = "CANCELED";
    /**
     * Cancelation has been initiated on the bulk operation. There may be a short delay from when a cancelation
     * starts until the operation is actually canceled.
     */
    const CANCELING = "CANCELING";
    /**
     * The bulk operation has successfully completed.
     */
    const COMPLETED = "COMPLETED";
    /**
     * The bulk operation has been created.
     */
    const CREATED = "CREATED";
    /**
     * The bulk operation URL has expired.
     */
    const EXPIRED = "EXPIRED";
    /**
     * The bulk operation has failed. For information on why the operation failed, use
     * [BulkOperation.errorCode](https://shopify.dev/api/admin-graphql/latest/enums/bulkoperationerrorcode).
     */
    const FAILED = "FAILED";
    /**
     * The bulk operation is running.
     */
    const RUNNING = "RUNNING";
}
