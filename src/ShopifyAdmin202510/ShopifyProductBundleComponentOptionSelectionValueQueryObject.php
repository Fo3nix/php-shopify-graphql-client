<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductBundleComponentOptionSelectionValueQueryObject extends QueryObject
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
