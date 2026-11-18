<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The statistics of a given attribute.
 */
class ShopifySegmentAttributeStatisticsQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentAttributeStatistics";

    /**
     * The average of a given attribute.
     */
    public function selectAverage(): static
    {
        $this->selectField("average");

        return $this;
    }

    /**
     * The sum of a given attribute.
     */
    public function selectSum(): static
    {
        $this->selectField("sum");

        return $this;
    }
}
