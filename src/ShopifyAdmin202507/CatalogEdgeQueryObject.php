<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CatalogEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CatalogEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
