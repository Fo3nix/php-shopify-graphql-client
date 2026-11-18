<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the value of the discount and how it is applied.
 */
class ShopifyDiscountAmountInputInputObject extends InputObject
{
    protected $amount;
    protected $appliesOnEachItem;

    /**
     * The value of the discount.
     */
    public function setAmount($amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * If true, then the discount is applied to each of the entitled items. If false, then the amount is split across all of the entitled items.
     */
    public function setAppliesOnEachItem($appliesOnEachItem): static
    {
        $this->appliesOnEachItem = $appliesOnEachItem;

        return $this;
    }
}
