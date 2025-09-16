<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SearchFilterQueryObject extends QueryObject
{
    const OBJECT_NAME = "SearchFilter";

    public function selectKey()
    {
        $this->selectField("key");

        return $this;
    }

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }
}
