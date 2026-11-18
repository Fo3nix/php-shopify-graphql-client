<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The percentage value of a discount.
 */
class ShopifyAppSubscriptionDiscountPercentageQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppSubscriptionDiscountPercentage";

    /**
     * The percentage value of a discount.
     */
    public function selectPercentage(): static
    {
        $this->selectField("percentage");

        return $this;
    }
}
