<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionDiscountPercentageValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDiscountPercentageValue";

    public function selectPercentage()
    {
        $this->selectField("percentage");

        return $this;
    }
}
