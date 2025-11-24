<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountBuyerSelectionAllQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountBuyerSelectionAll";

    public function selectAll()
    {
        $this->selectField("all");

        return $this;
    }
}
