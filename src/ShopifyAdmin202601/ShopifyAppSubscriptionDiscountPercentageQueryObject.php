<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAppSubscriptionDiscountPercentageQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppSubscriptionDiscountPercentage";

    public function selectPercentage()
    {
        $this->selectField("percentage");

        return $this;
    }
}
