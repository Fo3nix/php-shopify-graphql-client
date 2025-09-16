<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountMinimumQuantityQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountMinimumQuantity";

    public function selectGreaterThanOrEqualToQuantity()
    {
        $this->selectField("greaterThanOrEqualToQuantity");

        return $this;
    }
}
