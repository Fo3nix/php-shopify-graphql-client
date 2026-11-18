<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to create or update a recurring selling plan pricing policy.
 */
class ShopifySellingPlanRecurringPricingPolicyInputInputObject extends InputObject
{
    const REQUIRED = ["afterCycle"];

    protected $id;
    protected $adjustmentType;
    protected $adjustmentValue;
    protected $afterCycle;

    /**
     * ID of the pricing policy.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Price adjustment type defined by the policy.
     */
    public function setAdjustmentType($shopifySellingPlanPricingPolicyAdjustmentType): static
    {
        $this->adjustmentType = new RawObject($shopifySellingPlanPricingPolicyAdjustmentType);

        return $this;
    }

    /**
     * Price adjustment value defined by the policy.
     */
    public function setAdjustmentValue(ShopifySellingPlanPricingPolicyValueInputInputObject $shopifySellingPlanPricingPolicyValueInputInputObject): static
    {
        $this->adjustmentValue = $shopifySellingPlanPricingPolicyValueInputInputObject;

        return $this;
    }

    /**
     * Cycle after which the pricing policy applies.
     */
    public function setAfterCycle($afterCycle): static
    {
        $this->afterCycle = $afterCycle;

        return $this;
    }
}
