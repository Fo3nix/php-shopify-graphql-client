<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductBundleComponentQuantityOptionValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductBundleComponentQuantityOptionValue";

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectQuantity()
    {
        $this->selectField("quantity");

        return $this;
    }
}
