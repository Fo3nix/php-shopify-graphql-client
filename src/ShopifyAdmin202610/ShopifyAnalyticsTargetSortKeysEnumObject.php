<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the AnalyticsTarget query.
 */
class ShopifyAnalyticsTargetSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `created_at` value.
     */
    const CREATED_AT = "CREATED_AT";
    /**
     * Sort by the `end_date` value.
     */
    const END_DATE = "END_DATE";
    /**
     * Sort by the `expected_value` value.
     */
    const EXPECTED_VALUE = "EXPECTED_VALUE";
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
    /**
     * Sort by the `metric` value.
     */
    const METRIC = "METRIC";
    /**
     * Sort by the `name` value.
     */
    const NAME = "NAME";
    /**
     * Sort by the `start_date` value.
     */
    const START_DATE = "START_DATE";
}
