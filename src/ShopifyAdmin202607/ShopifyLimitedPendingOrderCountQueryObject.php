<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The total number of pending orders on a shop if less then a maximum, or that maximum.
 * The atMax field indicates when this maximum has been reached.
 */
class ShopifyLimitedPendingOrderCountQueryObject extends QueryObject
{
    const OBJECT_NAME = "LimitedPendingOrderCount";

    /**
     * This is set when the number of pending orders has reached the maximum.
     */
    public function selectAtMax(): static
    {
        $this->selectField("atMax");

        return $this;
    }

    /**
     * The number of pending orders on the shop.
     * Limited to a maximum of 10000.
     */
    public function selectCount(): static
    {
        $this->selectField("count");

        return $this;
    }
}
