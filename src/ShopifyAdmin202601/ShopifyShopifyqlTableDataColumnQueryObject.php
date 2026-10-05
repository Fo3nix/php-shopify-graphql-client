<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyqlTableDataColumnQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyqlTableDataColumn";

    public function selectDataType()
    {
        $this->selectField("dataType");

        return $this;
    }

    public function selectDisplayName()
    {
        $this->selectField("displayName");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectSubType()
    {
        $this->selectField("subType");

        return $this;
    }
}
