<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FinanceAppAccessPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "FinanceAppAccessPolicy";

    public function selectAccess()
    {
        $this->selectField("access");

        return $this;
    }
}
