<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class WeightQueryObject extends QueryObject
{
    const OBJECT_NAME = "Weight";

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
