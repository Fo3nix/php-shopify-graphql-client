<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountPurchaseAmountQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountPurchaseAmount";

    public function selectAmount()
    {
        $this->selectField("amount");

        return $this;
    }
}
