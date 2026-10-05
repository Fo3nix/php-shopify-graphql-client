<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

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
