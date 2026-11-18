<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The value of a percent price rule.
 */
class ShopifyPriceRulePercentValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceRulePercentValue";

    /**
     * The percent value of the price rule.
     */
    public function selectPercentage(): static
    {
        $this->selectField("percentage");

        return $this;
    }
}
