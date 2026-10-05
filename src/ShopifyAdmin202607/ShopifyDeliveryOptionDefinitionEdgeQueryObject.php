<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryOptionDefinitionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryOptionDefinitionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
