<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRolloutChangeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "RolloutChangeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
