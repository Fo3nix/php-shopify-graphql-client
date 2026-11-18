<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for prerequisite quantity or minimum purchase amount required for the discount.
 */
class ShopifyDiscountCustomerBuysValueInputInputObject extends InputObject
{
    protected $quantity;
    protected $amount;

    /**
     * The quantity of prerequisite items.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * The prerequisite minimum purchase amount required for the discount to be applicable.
     */
    public function setAmount($amount): static
    {
        $this->amount = $amount;

        return $this;
    }
}
