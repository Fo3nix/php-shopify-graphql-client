<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class EventEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "EventEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
