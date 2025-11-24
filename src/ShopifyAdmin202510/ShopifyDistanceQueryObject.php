<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDistanceQueryObject extends QueryObject
{
    const OBJECT_NAME = "Distance";

    public function selectUnit()
    {
        $this->selectField("unit");

        return $this;
    }

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }
}
