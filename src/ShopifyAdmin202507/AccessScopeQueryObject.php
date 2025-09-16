<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AccessScopeQueryObject extends QueryObject
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
