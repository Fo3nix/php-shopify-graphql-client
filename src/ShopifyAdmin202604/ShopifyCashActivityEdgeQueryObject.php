<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

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
