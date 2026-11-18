<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A time period during which a price rule is applicable.
 */
class ShopifyPriceRuleValidityPeriodQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceRuleValidityPeriod";

    /**
     * The time after which the price rule becomes invalid.
     */
    public function selectEnd(): static
    {
        $this->selectField("end");

        return $this;
    }

    /**
     * The time after which the price rule is valid.
     */
    public function selectStart(): static
    {
        $this->selectField("start");

        return $this;
    }
}
