<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for parameters to modify the schedule of a specific billing cycle.
 */
class ShopifySubscriptionBillingCycleScheduleEditInputInputObject extends InputObject
{
    const REQUIRED = ["reason"];

    protected $skip;
    protected $billingDate;
    protected $reason;

    /**
     * Sets the skip status for the billing cycle.
     */
    public function setSkip($skip): static
    {
        $this->skip = $skip;

        return $this;
    }

    /**
     * Sets the expected billing date for the billing cycle.
     */
    public function setBillingDate($billingDate): static
    {
        $this->billingDate = $billingDate;

        return $this;
    }

    /**
     * The reason for editing.
     */
    public function setReason($shopifySubscriptionBillingCycleScheduleEditInputScheduleEditReason): static
    {
        $this->reason = new RawObject($shopifySubscriptionBillingCycleScheduleEditInputScheduleEditReason);

        return $this;
    }
}
