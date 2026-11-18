<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A base error type that applies to all uncategorized error classes.
 */
class ShopifySubscriptionBillingAttemptGenericErrorQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptGenericError";

    /**
     * The code for the error.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * An explanation of the error.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }
}
