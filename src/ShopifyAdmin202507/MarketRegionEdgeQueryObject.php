<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketRegionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketRegionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
