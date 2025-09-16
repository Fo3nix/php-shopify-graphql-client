<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class LinkedMetafieldQueryObject extends QueryObject
{
    const OBJECT_NAME = "LinkedMetafield";

    public function selectKey()
    {
        $this->selectField("key");

        return $this;
    }

    public function selectNamespace()
    {
        $this->selectField("namespace");

        return $this;
    }
}
