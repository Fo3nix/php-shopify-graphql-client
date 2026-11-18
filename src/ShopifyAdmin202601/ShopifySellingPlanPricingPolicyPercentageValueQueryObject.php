<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The percentage value of a selling plan pricing policy percentage type.
 */
class ShopifySellingPlanPricingPolicyPercentageValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanPricingPolicyPercentageValue";

    /**
     * The percentage value.
     */
    public function selectPercentage(): static
    {
        $this->selectField("percentage");

        return $this;
    }
}
