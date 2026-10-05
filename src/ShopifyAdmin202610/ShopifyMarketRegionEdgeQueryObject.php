<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketRegionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketRegionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
