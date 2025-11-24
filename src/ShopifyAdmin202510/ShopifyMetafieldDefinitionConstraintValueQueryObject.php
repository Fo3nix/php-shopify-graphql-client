<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetafieldDefinitionConstraintValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionConstraintValue";

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }
}
