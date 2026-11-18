<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a price adjustment entry within an app-managed pricing policy. Stored as metadata for app use, not used for pricing calculations.
 */
class ShopifySubscriptionContractCalculationCyclePriceAdjustmentInputInputObject extends InputObject
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
     * The computed price after the adjustment is applied. The amount must be greater than or equal to 0.
     */
    public function setComputedPrice(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->computedPrice = $shopifyMoneyInputInputObject;

        return $this;
    }
}
