<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductBundleComponentOptionSelectionValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductBundleComponentOptionSelectionValue";

    public function selectSelectionStatus()
    {
        $this->selectField("selectionStatus");

        return $this;
    }

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }
}
