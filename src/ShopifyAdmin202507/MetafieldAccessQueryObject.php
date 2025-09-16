<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetafieldAccessQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldAccess";

    public function selectAdmin()
    {
        $this->selectField("admin");

        return $this;
    }

    public function selectCustomerAccount()
    {
        $this->selectField("customerAccount");

        return $this;
    }

    public function selectStorefront()
    {
        $this->selectField("storefront");

        return $this;
    }
}
