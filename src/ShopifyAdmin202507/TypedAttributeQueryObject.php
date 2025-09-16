<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class TypedAttributeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TypedAttribute";

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
