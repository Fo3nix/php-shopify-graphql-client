<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerMomentEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerMomentEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
