<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountApplicationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountApplicationEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
