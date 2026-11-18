<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An unexpected error that occurred during a subscription billing attempt.
 */
class ShopifySubscriptionBillingAttemptUnexpectedErrorQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptUnexpectedError";

    /**
     * A message describing the unexpected error.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }
}
