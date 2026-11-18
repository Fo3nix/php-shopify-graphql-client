<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the fixed amount value of the discount and distribution on the lines.
 */
class ShopifySubscriptionManualDiscountFixedAmountInputInputObject extends InputObject
{
    protected $amount;
    protected $appliesOnEachItem;

    /**
     * Fixed amount value.
     */
    public function setAmount($amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Whether the amount is intended per line item or once per subscription.
     */
    public function setAppliesOnEachItem($appliesOnEachItem): static
    {
        $this->appliesOnEachItem = $appliesOnEachItem;

        return $this;
    }
}
