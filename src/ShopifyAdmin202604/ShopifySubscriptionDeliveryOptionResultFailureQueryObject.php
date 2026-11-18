<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A failure to find the available delivery options for a subscription contract.
 */
class ShopifySubscriptionDeliveryOptionResultFailureQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDeliveryOptionResultFailure";

    /**
     * The reason for the failure.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }
}
