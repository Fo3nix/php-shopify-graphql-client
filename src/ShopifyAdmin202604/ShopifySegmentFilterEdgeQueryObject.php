<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifySegmentFilterEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentFilterEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
