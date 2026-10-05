<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifySellingPlanCheckoutChargePercentageValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanCheckoutChargePercentageValue";

    public function selectPercentage()
    {
        $this->selectField("percentage");

        return $this;
    }
}
