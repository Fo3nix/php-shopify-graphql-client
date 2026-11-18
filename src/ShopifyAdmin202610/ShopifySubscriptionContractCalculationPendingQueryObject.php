<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A subscription contract calculation that is still processing asynchronously.
 */
class ShopifySubscriptionContractCalculationPendingQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractCalculationPending";

    /**
     * The ID of the calculated contract.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }
}
