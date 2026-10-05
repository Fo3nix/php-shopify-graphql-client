<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyTypedAttributeQueryObject extends QueryObject
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
