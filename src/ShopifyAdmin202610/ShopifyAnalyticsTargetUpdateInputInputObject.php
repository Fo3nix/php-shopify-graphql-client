<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating an existing [analytics target](https://shopify.dev/docs/api/admin-graphql/latest/objects/AnalyticsTarget). Only provided fields are modified; omitted fields remain unchanged.
 */
class ShopifyAnalyticsTargetUpdateInputInputObject extends InputObject
{
    protected $metric;
    protected $startDate;
    protected $endDate;
    protected $expectedValue;
    protected $name;
    protected $filters;

    /**
     * The identifier of the analytics metric that this target tracks, such as `total_sales` or `orders`.
     */
    public function setMetric($metric): static
    {
        $this->metric = $metric;

        return $this;
    }

    /**
     * The start date of the period over which progress toward the target is measured.
     */
    public function setStartDate($startDate): static
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * The end date of the period over which progress toward the target is measured.
     */
    public function setEndDate($endDate): static
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * The goal value that the merchant aims to reach for the tracked metric within the target period. Must be greater than 0.
     */
    public function setExpectedValue($expectedValue): static
    {
        $this->expectedValue = $expectedValue;

        return $this;
    }

    /**
     * A human-readable label for the target, such as `Q1 Sales Target`.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * An optional filter expression to narrow the data evaluated against this target. For example, `shipping_country = 'US'`.
     */
    public function setFilters($filters): static
    {
        $this->filters = $filters;

        return $this;
    }
}
