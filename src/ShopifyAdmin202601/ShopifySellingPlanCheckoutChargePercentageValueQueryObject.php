<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The percentage value of the price used for checkout charge.
 */
class ShopifySellingPlanCheckoutChargePercentageValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanCheckoutChargePercentageValue";

    /**
     * The percentage value of the price used for checkout charge.
     */
    public function selectPercentage(): static
    {
        $this->selectField("percentage");

        return $this;
    }
}
