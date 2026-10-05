<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifySellingPlanInventoryPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanInventoryPolicy";

    public function selectReserve()
    {
        $this->selectField("reserve");

        return $this;
    }
}
