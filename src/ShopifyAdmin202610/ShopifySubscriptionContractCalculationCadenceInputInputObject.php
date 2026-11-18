<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for subscription cadence in the calculate API.
 */
class ShopifySubscriptionContractCalculationCadenceInputInputObject extends InputObject
{
    const REQUIRED = ["unit", "count"];

    protected $unit;
    protected $count;

    /**
     * The unit of time for the interval.
     */
    public function setUnit($shopifySubscriptionContractCalculationCadenceUnit): static
    {
        $this->unit = new RawObject($shopifySubscriptionContractCalculationCadenceUnit);

        return $this;
    }

    /**
     * Number of intervals between occurrences. Must be greater than or equal to 1.
     */
    public function setCount($count): static
    {
        $this->count = $count;

        return $this;
    }
}
