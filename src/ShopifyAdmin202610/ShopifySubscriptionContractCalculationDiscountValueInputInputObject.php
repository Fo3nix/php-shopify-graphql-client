<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for discount value used for contract calculation.
 * This is a oneOf input: one, and only one, field can be provided.
 */
class ShopifySubscriptionContractCalculationDiscountValueInputInputObject extends InputObject
{
    protected $percentage;
    protected $fixedAmount;

    /**
     * Percentage discount value (0-100).
     */
    public function setPercentage($percentage): static
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * Fixed amount discount value.
     */
    public function setFixedAmount(ShopifySubscriptionContractCalculationDiscountFixedAmountInputInputObject $shopifySubscriptionContractCalculationDiscountFixedAmountInputInputObject): static
    {
        $this->fixedAmount = $shopifySubscriptionContractCalculationDiscountFixedAmountInputInputObject;

        return $this;
    }
}
