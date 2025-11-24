<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFileEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "FileEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }
}
