<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountQuantityQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountQuantity";

    public function selectQuantity()
    {
        $this->selectField("quantity");

        return $this;
    }
}
