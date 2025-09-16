<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SegmentFilterEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentFilterEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
