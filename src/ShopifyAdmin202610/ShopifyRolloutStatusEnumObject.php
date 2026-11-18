<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The lifecycle status of a rollout.
 */
class ShopifyRolloutStatusEnumObject extends EnumObject
{
    /**
     * The rollout is being set up and doesn't serve its treatments to buyers.
     */
    const DRAFT = "DRAFT";
    /**
     * The rollout is set to start at a future date and doesn't serve its treatments to buyers yet.
     */
    const SCHEDULED = "SCHEDULED";
    /**
     * The rollout was active and is stopped until it's resumed. It doesn't serve its treatments to buyers.
     */
    const PAUSED = "PAUSED";
    /**
     * The rollout is serving its treatments to buyers.
     */
    const ACTIVE = "ACTIVE";
    /**
     * The rollout has ended and no longer serves its treatments to buyers.
     */
    const CONCLUDED = "CONCLUDED";
    /**
     * The rollout is archived and can't be changed. It doesn't serve its treatments to buyers.
     */
    const ARCHIVED = "ARCHIVED";
}
