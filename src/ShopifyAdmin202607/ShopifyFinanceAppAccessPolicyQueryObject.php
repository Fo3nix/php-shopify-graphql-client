<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Current user's access policy for a finance app.
 */
class ShopifyFinanceAppAccessPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "FinanceAppAccessPolicy";

    /**
     * Current shop staff's access within the app.
     */
    public function selectAccess(): static
    {
        $this->selectField("access");

        return $this;
    }
}
