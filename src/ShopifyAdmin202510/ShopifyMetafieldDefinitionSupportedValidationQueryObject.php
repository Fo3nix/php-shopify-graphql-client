<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetafieldDefinitionSupportedValidationQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionSupportedValidation";

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }
}
