<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountCustomerAllQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCustomerAll";

    public function selectAllCustomers()
    {
        $this->selectField("allCustomers");

        return $this;
    }
}
