<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AllDiscountItemsQueryObject extends QueryObject
{
    const OBJECT_NAME = "AllDiscountItems";

    public function selectAllItems()
    {
        $this->selectField("allItems");

        return $this;
    }
}
