<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MediaEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MediaEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
