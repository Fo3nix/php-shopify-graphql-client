<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerAccountPageEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerAccountPageEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
