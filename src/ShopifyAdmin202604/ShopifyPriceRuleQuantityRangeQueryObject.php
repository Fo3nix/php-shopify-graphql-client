<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A quantity range within which the price rule is applicable.
 */
class ShopifyPriceRuleQuantityRangeQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceRuleQuantityRange";

    /**
     * The lower bound of the quantity range.
     */
    public function selectGreaterThan(): static
    {
        $this->selectField("greaterThan");

        return $this;
    }

    /**
     * The lower bound or equal of the quantity range.
     */
    public function selectGreaterThanOrEqualTo(): static
    {
        $this->selectField("greaterThanOrEqualTo");

        return $this;
    }

    /**
     * The upper bound of the quantity range.
     */
    public function selectLessThan(): static
    {
        $this->selectField("lessThan");

        return $this;
    }

    /**
     * The upper bound or equal of the quantity range.
     */
    public function selectLessThanOrEqualTo(): static
    {
        $this->selectField("lessThanOrEqualTo");

        return $this;
    }
}
