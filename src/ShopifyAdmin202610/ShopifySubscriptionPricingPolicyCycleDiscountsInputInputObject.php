<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for an array containing all pricing changes for each billing cycle.
 */
class ShopifySubscriptionPricingPolicyCycleDiscountsInputInputObject extends InputObject
{
    const REQUIRED = ["afterCycle", "adjustmentType", "adjustmentValue", "computedPrice"];

    protected $afterCycle;
    protected $adjustmentType;
    protected $adjustmentValue;
    protected $computedPrice;

    /**
     * The cycle after which the pricing policy applies.
     */
    public function setAfterCycle($afterCycle): static
    {
        $this->afterCycle = $afterCycle;

        return $this;
    }

    /**
     * The price adjustment type.
     */
    public function setAdjustmentType($shopifySellingPlanPricingPolicyAdjustmentType): static
    {
        $this->adjustmentType = new RawObject($shopifySellingPlanPricingPolicyAdjustmentType);

        return $this;
    }

    /**
     * The price adjustment value.
     */
    public function setAdjustmentValue(ShopifySellingPlanPricingPolicyValueInputInputObject $shopifySellingPlanPricingPolicyValueInputInputObject): static
    {
        $this->adjustmentValue = $shopifySellingPlanPricingPolicyValueInputInputObject;

        return $this;
    }

    /**
     * The computed price after the adjustments are applied.
     */
    public function setComputedPrice($computedPrice): static
    {
        $this->computedPrice = $computedPrice;

        return $this;
    }
}
