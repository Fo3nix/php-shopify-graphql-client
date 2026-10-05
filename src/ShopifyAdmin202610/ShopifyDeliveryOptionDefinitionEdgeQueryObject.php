<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

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
