<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * One type of value given to a customer when a discount is applied to an order.
 * The application of a discount with this value gives the customer the specified percentage off a specified item.
 */
class ShopifyPricingPercentageValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "PricingPercentageValue";

    /**
     * The percentage value of the object. This is a number between -100 (free) and 0 (no discount).
     */
    public function selectPercentage(): static
    {
        $this->selectField("percentage");

        return $this;
    }
}
