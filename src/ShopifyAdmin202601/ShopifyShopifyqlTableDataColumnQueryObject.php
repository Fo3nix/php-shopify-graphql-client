<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a column in a ShopifyQL query response.
 */
class ShopifyShopifyqlTableDataColumnQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyqlTableDataColumn";

    /**
     * The data type of the column.
     */
    public function selectDataType(): static
    {
        $this->selectField("dataType");

        return $this;
    }

    /**
     * The human-readable display name of the column.
     */
    public function selectDisplayName(): static
    {
        $this->selectField("displayName");

        return $this;
    }

    /**
     * The name of the column.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The element type of an array column or DAY_DURATION for a range column.
     */
    public function selectSubType(): static
    {
        $this->selectField("subType");

        return $this;
    }
}
