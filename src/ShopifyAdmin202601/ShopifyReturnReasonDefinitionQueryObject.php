<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReturnReasonDefinitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnReasonDefinition";

    public function selectDeleted()
    {
        $this->selectField("deleted");

        return $this;
    }

    public function selectHandle()
    {
        $this->selectField("handle");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }
}
