<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAccessScopeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AccessScope";

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectHandle()
    {
        $this->selectField("handle");

        return $this;
    }
}
