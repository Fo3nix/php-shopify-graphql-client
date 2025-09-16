<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerMomentEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerMomentEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
