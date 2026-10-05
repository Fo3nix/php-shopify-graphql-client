<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOrderEditSessionQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderEditSession";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }
}
