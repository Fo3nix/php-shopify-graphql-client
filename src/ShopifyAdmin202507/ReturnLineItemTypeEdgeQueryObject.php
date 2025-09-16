<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReturnLineItemTypeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnLineItemTypeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
