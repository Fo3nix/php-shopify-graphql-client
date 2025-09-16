<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppSubscriptionDiscountPercentageQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppSubscriptionDiscountPercentage";

    public function selectPercentage()
    {
        $this->selectField("percentage");

        return $this;
    }
}
