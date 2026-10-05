<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFinanceAppAccessPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "FinanceAppAccessPolicy";

    public function selectAccess()
    {
        $this->selectField("access");

        return $this;
    }
}
