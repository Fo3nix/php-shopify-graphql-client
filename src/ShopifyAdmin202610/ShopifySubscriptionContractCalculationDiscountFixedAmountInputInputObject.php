<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for fixed amount discount in the calculate API.
 */
class ShopifySubscriptionContractCalculationDiscountFixedAmountInputInputObject extends InputObject
{
    const REQUIRED = ["appliesOnEachItem", "amount"];

    protected $appliesOnEachItem;
    protected $amount;

    /**
     * Whether the fixed amount applies to each item or the total.
     */
    public function setAppliesOnEachItem($appliesOnEachItem): static
    {
        $this->appliesOnEachItem = $appliesOnEachItem;

        return $this;
    }

    /**
     * The fixed discount amount. The amount must be greater than or equal to 0.
     */
    public function setAmount(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->amount = $shopifyMoneyInputInputObject;

        return $this;
    }
}
