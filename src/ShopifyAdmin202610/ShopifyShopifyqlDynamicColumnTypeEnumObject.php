<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The kind of dynamically generated column.
 */
class ShopifyShopifyqlDynamicColumnTypeEnumObject extends EnumObject
{
    /**
     * Unspecified dynamic column type.
     */
    const UNSPECIFIED = "UNSPECIFIED";
    /**
     * A column with totals.
     */
    const TOTALS = "TOTALS";
    /**
     * A comparison data column (the comparison period).
     */
    const COMPARISON = "COMPARISON";
    /**
     * A percent-change column.
     */
    const PERCENT_CHANGE = "PERCENT_CHANGE";
    /**
     * A comparison column with totals.
     */
    const COMPARISON_TOTALS = "COMPARISON_TOTALS";
    /**
     * A benchmark data column.
     */
    const BENCHMARKS = "BENCHMARKS";
    /**
     * A benchmark column with totals.
     */
    const BENCHMARK_TOTALS = "BENCHMARK_TOTALS";
    /**
     * A cumulative column.
     */
    const CUMULATIVE = "CUMULATIVE";
    /**
     * A comparison column with cumulative data.
     */
    const COMPARISON_CUMULATIVE = "COMPARISON_CUMULATIVE";
    /**
     * An attribution column.
     */
    const ATTRIBUTION = "ATTRIBUTION";
    /**
     * An attribution column with totals.
     */
    const ATTRIBUTION_TOTALS = "ATTRIBUTION_TOTALS";
    /**
     * An attribution column with comparison data.
     */
    const ATTRIBUTION_COMPARISON = "ATTRIBUTION_COMPARISON";
    /**
     * An attribution column with percent-change data.
     */
    const ATTRIBUTION_PERCENT_CHANGE = "ATTRIBUTION_PERCENT_CHANGE";
    /**
     * An attribution column with comparison data and totals.
     */
    const ATTRIBUTION_COMPARISON_TOTALS = "ATTRIBUTION_COMPARISON_TOTALS";
    /**
     * An attribution column with cumulative data.
     */
    const ATTRIBUTION_CUMULATIVE = "ATTRIBUTION_CUMULATIVE";
    /**
     * An attribution column with comparison and cumulative data.
     */
    const ATTRIBUTION_COMPARISON_CUMULATIVE = "ATTRIBUTION_COMPARISON_CUMULATIVE";
    /**
     * A rollout results column.
     */
    const ROLLOUT_RESULTS = "ROLLOUT_RESULTS";
    /**
     * A percentage of the corresponding overall totals column.
     */
    const PERCENT_OF_TOTAL = "PERCENT_OF_TOTAL";
}
