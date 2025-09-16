<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CountQueryObject extends QueryObject
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
