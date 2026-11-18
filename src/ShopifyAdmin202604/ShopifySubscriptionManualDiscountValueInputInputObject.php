<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the discount value and its distribution.
 */
class ShopifySubscriptionManualDiscountValueInputInputObject extends InputObject
{
    protected $percentage;
    protected $fixedAmount;

    /**
     * The percentage value of the discount. Value must be between 0 - 100.
     */
    public function setPercentage($percentage): static
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * Fixed amount input in the currency defined by the subscription.
     */
    public function setFixedAmount(ShopifySubscriptionManualDiscountFixedAmountInputInputObject $shopifySubscriptionManualDiscountFixedAmountInputInputObject): static
    {
        $this->fixedAmount = $shopifySubscriptionManualDiscountFixedAmountInputInputObject;

        return $this;
    }
}
