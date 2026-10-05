<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

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
