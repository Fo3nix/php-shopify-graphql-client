<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOrderAttributionDefinitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderAttributionDefinition";

    public function selectDisplayName()
    {
        $this->selectField("displayName");

        return $this;
    }

    public function selectHandle()
    {
        $this->selectField("handle");

        return $this;
    }

    public function selectIcon()
    {
        $this->selectField("icon");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }
}
