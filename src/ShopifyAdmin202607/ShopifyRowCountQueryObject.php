<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A row count represents rows on background operation.
 */
class ShopifyRowCountQueryObject extends QueryObject
{
    const OBJECT_NAME = "RowCount";

    /**
     * Estimated number of rows contained within this background operation.
     */
    public function selectCount(): static
    {
        $this->selectField("count");

        return $this;
    }

    /**
     * Whether the operation exceeds max number of reportable rows.
     */
    public function selectExceedsMax(): static
    {
        $this->selectField("exceedsMax");

        return $this;
    }
}
