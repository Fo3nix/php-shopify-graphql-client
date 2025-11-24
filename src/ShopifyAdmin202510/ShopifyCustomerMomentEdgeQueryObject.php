<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

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
