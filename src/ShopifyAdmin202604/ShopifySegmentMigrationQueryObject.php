<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A segment and its corresponding saved search.
 * For example, you can use `SegmentMigration` to retrieve the segment ID that corresponds to a saved search ID.
 */
class ShopifySegmentMigrationQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentMigration";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The ID of the saved search.
     */
    public function selectSavedSearchId(): static
    {
        $this->selectField("savedSearchId");

        return $this;
    }

    /**
     * The ID of the segment.
     */
    public function selectSegmentId(): static
    {
        $this->selectField("segmentId");

        return $this;
    }
}
