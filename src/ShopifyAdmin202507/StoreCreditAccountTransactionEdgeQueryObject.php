<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class StoreCreditAccountTransactionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "StoreCreditAccountTransactionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
