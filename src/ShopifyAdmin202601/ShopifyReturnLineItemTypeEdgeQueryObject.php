<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReturnLineItemTypeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnLineItemTypeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
