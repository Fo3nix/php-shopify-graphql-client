<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the selling plan for a line item.
 */
class ShopifyLineItemSellingPlanQueryObject extends QueryObject
{
    const OBJECT_NAME = "LineItemSellingPlan";

    /**
     * The name of the selling plan for display purposes.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The ID of the selling plan associated with the line item.
     */
    public function selectSellingPlanId(): static
    {
        $this->selectField("sellingPlanId");

        return $this;
    }
}
