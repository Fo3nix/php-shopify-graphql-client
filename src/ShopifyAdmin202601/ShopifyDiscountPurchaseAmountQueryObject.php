<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A purchase amount in the context of a discount. This object can be used to define the minimum purchase amount required for a discount to be applicable.
 */
class ShopifyDiscountPurchaseAmountQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountPurchaseAmount";

    /**
     * The purchase amount in decimal format.
     */
    public function selectAmount(): static
    {
        $this->selectField("amount");

        return $this;
    }
}
