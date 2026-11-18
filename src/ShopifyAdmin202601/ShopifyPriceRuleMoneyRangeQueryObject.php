<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A money range within which the price rule is applicable.
 */
class ShopifyPriceRuleMoneyRangeQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceRuleMoneyRange";

    /**
     * The lower bound of the money range.
     */
    public function selectGreaterThan(): static
    {
        $this->selectField("greaterThan");

        return $this;
    }

    /**
     * The lower bound or equal of the money range.
     */
    public function selectGreaterThanOrEqualTo(): static
    {
        $this->selectField("greaterThanOrEqualTo");

        return $this;
    }

    /**
     * The upper bound of the money range.
     */
    public function selectLessThan(): static
    {
        $this->selectField("lessThan");

        return $this;
    }

    /**
     * The upper bound or equal of the money range.
     */
    public function selectLessThanOrEqualTo(): static
    {
        $this->selectField("lessThanOrEqualTo");

        return $this;
    }
}
