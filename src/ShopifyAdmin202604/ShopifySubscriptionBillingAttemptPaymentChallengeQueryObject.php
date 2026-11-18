<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A payment challenge that the customer must complete.
 */
class ShopifySubscriptionBillingAttemptPaymentChallengeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptPaymentChallenge";

    /**
     * URL to redirect the customer for authentication.
     */
    public function selectNextActionUrl(): static
    {
        $this->selectField("nextActionUrl");

        return $this;
    }

    /**
     * The status of the payment challenge.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }
}
