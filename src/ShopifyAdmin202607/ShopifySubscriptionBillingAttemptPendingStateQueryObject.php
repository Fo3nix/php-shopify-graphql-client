<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The billing attempt is currently being processed.
 */
class ShopifySubscriptionBillingAttemptPendingStateQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptPendingState";

    /**
     * Always true when the billing attempt is pending.
     */
    public function selectProcessing(): static
    {
        $this->selectField("processing");

        return $this;
    }
}
