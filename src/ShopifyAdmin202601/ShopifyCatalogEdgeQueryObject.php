<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCatalogEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CatalogEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
