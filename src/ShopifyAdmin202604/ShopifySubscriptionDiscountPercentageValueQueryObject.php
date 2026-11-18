<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The percentage value of the discount.
 */
class ShopifySubscriptionDiscountPercentageValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDiscountPercentageValue";

    /**
     * The percentage value of the discount.
     */
    public function selectPercentage(): static
    {
        $this->selectField("percentage");

        return $this;
    }
}
