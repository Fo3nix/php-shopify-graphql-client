<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `AppSubscriptionTrialExtendUserError`.
 */
class ShopifyAppSubscriptionTrialExtendUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The app subscription wasn't found.
     */
    const SUBSCRIPTION_NOT_FOUND = "SUBSCRIPTION_NOT_FOUND";
    /**
     * The trial isn't active.
     */
    const TRIAL_NOT_ACTIVE = "TRIAL_NOT_ACTIVE";
    /**
     * The app subscription isn't active.
     */
    const SUBSCRIPTION_NOT_ACTIVE = "SUBSCRIPTION_NOT_ACTIVE";
}
