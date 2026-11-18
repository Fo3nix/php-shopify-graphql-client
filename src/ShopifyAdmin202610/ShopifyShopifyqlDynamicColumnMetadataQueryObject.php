<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Describes how a dynamically generated column relates to the query.
 */
class ShopifyShopifyqlDynamicColumnMetadataQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyqlDynamicColumnMetadata";

    /**
     * The names of the dimension columns this column is aggregated (grouped) by.
     */
    public function selectAggregatedBy(): static
    {
        $this->selectField("aggregatedBy");

        return $this;
    }

    /**
     * What the column is compared against. For benchmark columns, the percentile (e.g. `p50`); for comparison columns, the comparison period or date offset. Interpret based on `type`.
     */
    public function selectComparisonReference(): static
    {
        $this->selectField("comparisonReference");

        return $this;
    }

    /**
     * The query column this dynamic column was derived from (e.g. `total_sales`).
     */
    public function selectOriginalColumnName(): static
    {
        $this->selectField("originalColumnName");

        return $this;
    }

    /**
     * The kind of dynamic column.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }
}
