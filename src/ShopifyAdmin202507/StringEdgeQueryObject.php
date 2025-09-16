<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class StringEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "StringEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode()
    {
        $this->selectField("node");

        return $this;
    }
}
