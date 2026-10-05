<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

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
