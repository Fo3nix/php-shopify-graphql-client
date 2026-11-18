<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Failure determining available shipping options for delivery of a subscription contract.
 */
class ShopifySubscriptionShippingOptionResultFailureQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionShippingOptionResultFailure";

    /**
     * Failure reason.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }
}
