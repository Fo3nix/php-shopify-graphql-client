<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountCustomerSelectionUnknownQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCustomerSelectionUnknown";

    public function selectCustomerSelectionType()
    {
        $this->selectField("customerSelectionType");

        return $this;
    }
}
