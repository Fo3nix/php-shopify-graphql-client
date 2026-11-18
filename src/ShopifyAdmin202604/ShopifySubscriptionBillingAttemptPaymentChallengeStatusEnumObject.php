<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The status of the billing attempt authentication process.
 */
class ShopifySubscriptionBillingAttemptPaymentChallengeStatusEnumObject extends EnumObject
{
    /**
     * The billing attempt is rejected because the customer action was required. The customer has not yet attempted to complete the challenge.
     */
    const OFF_SESSION_REJECTED = "OFF_SESSION_REJECTED";
    /**
     * The customer was brought on session and challenged.
     */
    const ON_SESSION_CHALLENGED = "ON_SESSION_CHALLENGED";
}
