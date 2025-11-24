<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifySalesAgreementEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SalesAgreementEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
