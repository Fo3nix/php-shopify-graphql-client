<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCashActivityEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashActivityEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
