<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAllDiscountItemsQueryObject extends QueryObject
{
    const OBJECT_NAME = "AllDiscountItems";

    public function selectAllItems()
    {
        $this->selectField("allItems");

        return $this;
    }
}
