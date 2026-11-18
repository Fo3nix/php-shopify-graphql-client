<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Categorical filter options for building customer segments using predefined value sets like countries, subscription statuses, or order frequencies.
 *
 * For example, a "Customer Location" enum filter provides options like "United States," "Canada," and "United Kingdom."
 *
 * Use this object to:
 * - Access available categorical filter options
 * - Understand filter capabilities and constraints
 * - Build user interfaces for segment creation
 *
 * Includes localized display names, indicates whether multiple values can be selected, and provides technical query names for API operations.
 */
class ShopifySegmentEnumFilterQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentEnumFilter";

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
