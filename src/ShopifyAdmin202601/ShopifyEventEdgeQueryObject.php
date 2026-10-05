<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

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
