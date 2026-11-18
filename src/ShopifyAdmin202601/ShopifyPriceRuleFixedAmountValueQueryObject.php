<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The value of a fixed amount price rule.
 */
class ShopifyPriceRuleFixedAmountValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceRuleFixedAmountValue";

    /**
     * The monetary value of the price rule.
     */
    public function selectAmount(): static
    {
        $this->selectField("amount");

        return $this;
    }
}
