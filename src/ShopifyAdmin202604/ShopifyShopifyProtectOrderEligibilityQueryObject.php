<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyProtectOrderEligibilityQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyProtectOrderEligibility";

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }
}
