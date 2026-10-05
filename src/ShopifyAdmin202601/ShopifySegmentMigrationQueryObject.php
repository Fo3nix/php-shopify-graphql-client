<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifySegmentMigrationQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentMigration";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectSavedSearchId()
    {
        $this->selectField("savedSearchId");

        return $this;
    }

    public function selectSegmentId()
    {
        $this->selectField("segmentId");

        return $this;
    }
}
