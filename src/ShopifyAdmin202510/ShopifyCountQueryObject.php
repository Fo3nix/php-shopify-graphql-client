<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCountQueryObject extends QueryObject
{
    const OBJECT_NAME = "Count";

    public function selectCount()
    {
        $this->selectField("count");

        return $this;
    }

    public function selectPrecision()
    {
        $this->selectField("precision");

        return $this;
    }
}
