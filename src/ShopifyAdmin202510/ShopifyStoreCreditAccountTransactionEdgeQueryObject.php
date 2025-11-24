<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyStoreCreditAccountTransactionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "StoreCreditAccountTransactionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
