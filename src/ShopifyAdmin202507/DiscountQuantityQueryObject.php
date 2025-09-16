<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountQuantityQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountQuantity";

    public function selectQuantity()
    {
        $this->selectField("quantity");

        return $this;
    }
}
