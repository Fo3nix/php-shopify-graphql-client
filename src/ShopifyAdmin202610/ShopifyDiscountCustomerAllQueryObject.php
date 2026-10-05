<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountCustomerAllQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCustomerAll";

    public function selectAllCustomers()
    {
        $this->selectField("allCustomers");

        return $this;
    }
}
