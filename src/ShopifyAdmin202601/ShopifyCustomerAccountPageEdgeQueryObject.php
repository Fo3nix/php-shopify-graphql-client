<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

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
