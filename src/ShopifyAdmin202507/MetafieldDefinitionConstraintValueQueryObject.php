<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetafieldDefinitionConstraintValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionConstraintValue";

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }
}
