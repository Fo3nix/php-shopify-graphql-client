<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerAccountPageEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerAccountPageEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
