<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents an applied code discount.
 */
class ShopifySubscriptionAppliedCodeDiscountQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionAppliedCodeDiscount";

    /**
     * The unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The redeem code of the discount that applies on the subscription.
     */
    public function selectRedeemCode(): static
    {
        $this->selectField("redeemCode");

        return $this;
    }

    /**
     * The reason that the discount on the subscription draft is rejected.
     */
    public function selectRejectionReason(): static
    {
        $this->selectField("rejectionReason");

        return $this;
    }
}
