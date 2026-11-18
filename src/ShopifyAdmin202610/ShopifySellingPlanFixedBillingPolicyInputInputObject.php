<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to create or update a fixed billing policy.
 */
class ShopifySellingPlanFixedBillingPolicyInputInputObject extends InputObject
{
    protected $remainingBalanceChargeTrigger;
    protected $remainingBalanceChargeExactTime;
    protected $remainingBalanceChargeTimeAfterCheckout;
    protected $checkoutCharge;

    /**
     * When to capture the payment for the amount due.
     */
    public function setRemainingBalanceChargeTrigger($shopifySellingPlanRemainingBalanceChargeTrigger): static
    {
        $this->remainingBalanceChargeTrigger = new RawObject($shopifySellingPlanRemainingBalanceChargeTrigger);

        return $this;
    }

    /**
     * The date and time to capture the full payment.
     */
    public function setRemainingBalanceChargeExactTime($remainingBalanceChargeExactTime): static
    {
        $this->remainingBalanceChargeExactTime = $remainingBalanceChargeExactTime;

        return $this;
    }

    /**
     * The period after capturing the payment for the amount due (`remainingBalanceChargeTrigger`), and before capturing the full payment. Expressed as an ISO8601 duration.
     */
    public function setRemainingBalanceChargeTimeAfterCheckout($remainingBalanceChargeTimeAfterCheckout): static
    {
        $this->remainingBalanceChargeTimeAfterCheckout = $remainingBalanceChargeTimeAfterCheckout;

        return $this;
    }

    /**
     * The checkout charge policy for the selling plan.
     */
    public function setCheckoutCharge(ShopifySellingPlanCheckoutChargeInputInputObject $shopifySellingPlanCheckoutChargeInputInputObject): static
    {
        $this->checkoutCharge = $shopifySellingPlanCheckoutChargeInputInputObject;

        return $this;
    }
}
