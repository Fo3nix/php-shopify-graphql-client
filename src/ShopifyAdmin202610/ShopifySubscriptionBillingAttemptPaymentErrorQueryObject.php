<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A payment-related error that occurred during a subscription billing attempt.
 */
class ShopifySubscriptionBillingAttemptPaymentErrorQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptPaymentError";

    /**
     * The error code for the payment failure.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }
}
