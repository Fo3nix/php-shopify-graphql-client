<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyGiftCardTransactionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardTransactionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
