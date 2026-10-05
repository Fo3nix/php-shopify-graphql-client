<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyLinkedMetafieldQueryObject extends QueryObject
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
