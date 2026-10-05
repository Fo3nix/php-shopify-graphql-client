<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifySellingPlanPricingPolicyPercentageValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanPricingPolicyPercentageValue";

    public function selectPercentage()
    {
        $this->selectField("percentage");

        return $this;
    }
}
