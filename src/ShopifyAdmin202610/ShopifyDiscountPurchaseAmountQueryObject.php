<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountPurchaseAmountQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountPurchaseAmount";

    public function selectAmount()
    {
        $this->selectField("amount");

        return $this;
    }
}
