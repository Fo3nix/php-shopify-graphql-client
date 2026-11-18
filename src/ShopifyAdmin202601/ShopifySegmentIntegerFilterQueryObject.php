<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A filter with an integer that's been added to a segment query.
 */
class ShopifySegmentIntegerFilterQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentIntegerFilter";

    /**
     * The localized name of the filter.
     */
    public function selectLocalizedName(): static
    {
        $this->selectField("localizedName");

        return $this;
    }

    /**
     * The maximum range a filter can have.
     */
    public function selectMaxRange(): static
    {
        $this->selectField("maxRange");

        return $this;
    }

    /**
     * The minimum range a filter can have.
     */
    public function selectMinRange(): static
    {
        $this->selectField("minRange");

        return $this;
    }

    /**
     * Whether a file can have multiple values for a single customer.
     */
    public function selectMultiValue(): static
    {
        $this->selectField("multiValue");

        return $this;
    }

    /**
     * The query name of the filter.
     */
    public function selectQueryName(): static
    {
        $this->selectField("queryName");

        return $this;
    }
}
