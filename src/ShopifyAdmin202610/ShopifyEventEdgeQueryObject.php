<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyEventEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "EventEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
