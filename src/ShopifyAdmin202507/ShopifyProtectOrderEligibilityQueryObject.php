<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProtectOrderEligibilityQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyProtectOrderEligibility";

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }
}
