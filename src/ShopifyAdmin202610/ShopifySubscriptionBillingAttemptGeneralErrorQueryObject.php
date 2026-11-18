<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An error that occurred during a subscription billing attempt that doesn't fit other categories.
 */
class ShopifySubscriptionBillingAttemptGeneralErrorQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptGeneralError";

    /**
     * The error code for the failure.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }
}
