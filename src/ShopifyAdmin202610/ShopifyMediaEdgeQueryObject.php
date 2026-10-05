<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMediaEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MediaEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
