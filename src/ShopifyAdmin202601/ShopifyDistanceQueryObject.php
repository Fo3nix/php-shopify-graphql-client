<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A distance, which includes a numeric value and a unit of measurement.
 */
class ShopifyDistanceQueryObject extends QueryObject
{
    const OBJECT_NAME = "Distance";

    /**
     * The unit of measurement for `value`.
     */
    public function selectUnit(): static
    {
        $this->selectField("unit");

        return $this;
    }

    /**
     * The distance value using the unit system specified with `unit`.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
