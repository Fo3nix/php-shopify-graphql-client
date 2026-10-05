<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountPercentageQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountPercentage";

    public function selectPercentage()
    {
        $this->selectField("percentage");

        return $this;
    }
}
