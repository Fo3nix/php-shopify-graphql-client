<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A filter with a string that's been added to a segment query.
 */
class ShopifySegmentStringFilterQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentStringFilter";

    /**
     * The localized name of the filter.
     */
    public function selectLocalizedName(): static
    {
        $this->selectField("localizedName");

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
