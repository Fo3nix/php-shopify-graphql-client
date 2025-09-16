<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SellingPlanCheckoutChargePercentageValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanCheckoutChargePercentageValue";

    public function selectPercentage()
    {
        $this->selectField("percentage");

        return $this;
    }
}
