<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SellingPlanPricingPolicyPercentageValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanPricingPolicyPercentageValue";

    public function selectPercentage()
    {
        $this->selectField("percentage");

        return $this;
    }
}
