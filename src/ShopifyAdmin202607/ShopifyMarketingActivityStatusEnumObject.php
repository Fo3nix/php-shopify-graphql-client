<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Status helps to identify if this marketing activity has been completed, queued, failed etc.
 */
class ShopifyMarketingActivityStatusEnumObject extends EnumObject
{
    /**
     * This marketing activity is currently running.
     */
    const ACTIVE = "ACTIVE";
    /**
     * This marketing activity is permanently unavailable.
     */
    const DELETED = "DELETED";
    /**
     * This marketing activity was deleted and it was triggered from outside of Shopify.
     */
    const DELETED_EXTERNALLY = "DELETED_EXTERNALLY";
    /**
     * This marketing activity is disconnected and no longer editable.
     */
    const DISCONNECTED = "DISCONNECTED";
    /**
     * This marketing activity has been edited, but it is not yet created.
     */
    const DRAFT = "DRAFT";
    /**
     * This marketing activity is unable to run.
     */
    const FAILED = "FAILED";
    /**
     * This marketing activity has completed running.
     */
    const INACTIVE = "INACTIVE";
    /**
     * This marketing activity is currently not running.
     */
    const PAUSED = "PAUSED";
    /**
     * This marketing activity is pending creation on the app's marketing platform.
     */
    const PENDING = "PENDING";
    /**
     * This marketing activity is scheduled to run.
     */
    const SCHEDULED = "SCHEDULED";
    /**
     * The marketing activity's status is unknown.
     */
    const UNDEFINED = "UNDEFINED";
}
