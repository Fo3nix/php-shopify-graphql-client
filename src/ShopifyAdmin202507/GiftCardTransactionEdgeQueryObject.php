<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class GiftCardTransactionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardTransactionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
