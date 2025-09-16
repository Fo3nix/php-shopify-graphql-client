<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductBundleComponentQuantityOptionValueQueryObject extends QueryObject
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
