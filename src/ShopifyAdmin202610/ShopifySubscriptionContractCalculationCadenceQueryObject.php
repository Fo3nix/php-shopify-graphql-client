<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A subscription cadence: a unit of time and the number of units between occurrences.
 */
class ShopifySubscriptionContractCalculationCadenceQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractCalculationCadence";

    /**
     * The number of intervals between occurrences.
     */
    public function selectCount(): static
    {
        $this->selectField("count");

        return $this;
    }

    /**
     * The unit of time for the interval.
     */
    public function selectUnit(): static
    {
        $this->selectField("unit");

        return $this;
    }
}
