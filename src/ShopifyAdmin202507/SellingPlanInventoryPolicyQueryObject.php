<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SellingPlanInventoryPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanInventoryPolicy";

    public function selectReserve()
    {
        $this->selectField("reserve");

        return $this;
    }
}
