<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Set of possible statuses for an external marketing activity.
 */
class ShopifyMarketingActivityExternalStatusEnumObject extends EnumObject
{
    /**
     * This marketing activity is currently running.
     */
    const ACTIVE = "ACTIVE";
    /**
     * This marketing activity has completed running.
     */
    const INACTIVE = "INACTIVE";
    /**
     * This marketing activity is currently not running.
     */
    const PAUSED = "PAUSED";
    /**
     * This marketing activity is scheduled to run.
     */
    const SCHEDULED = "SCHEDULED";
    /**
     * This marketing activity was deleted and it was triggered from outside of Shopify.
     */
    const DELETED_EXTERNALLY = "DELETED_EXTERNALLY";
    /**
     * The marketing activity's status is unknown.
     */
    const UNDEFINED = "UNDEFINED";
}
