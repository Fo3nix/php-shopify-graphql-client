<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountMinimumQuantityQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountMinimumQuantity";

    public function selectGreaterThanOrEqualToQuantity()
    {
        $this->selectField("greaterThanOrEqualToQuantity");

        return $this;
    }
}
