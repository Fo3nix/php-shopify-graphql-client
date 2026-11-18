<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The selling plan inventory policy.
 */
class ShopifySellingPlanInventoryPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanInventoryPolicy";

    /**
     * When to reserve inventory for the order.
     */
    public function selectReserve(): static
    {
        $this->selectField("reserve");

        return $this;
    }
}
