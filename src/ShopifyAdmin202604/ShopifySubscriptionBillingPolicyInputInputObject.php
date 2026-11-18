<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a Subscription Billing Policy.
 */
class ShopifySubscriptionBillingPolicyInputInputObject extends InputObject
{
    const REQUIRED = ["interval", "intervalCount"];

    protected $interval;
    protected $intervalCount;
    protected $minCycles;
    protected $maxCycles;
    protected $anchors;

    /**
     * The kind of interval that's associated with this schedule (e.g. Monthly, Weekly, etc).
     */
    public function setInterval($shopifySellingPlanInterval): static
    {
        $this->interval = new RawObject($shopifySellingPlanInterval);

        return $this;
    }

    /**
     * The number of billing intervals between invoices.
     */
    public function setIntervalCount($intervalCount): static
    {
        $this->intervalCount = $intervalCount;

        return $this;
    }

    /**
     * Minimum amount of cycles required in the subscription.
     */
    public function setMinCycles($minCycles): static
    {
        $this->minCycles = $minCycles;

        return $this;
    }

    /**
     * Maximum amount of cycles required in the subscription.
     */
    public function setMaxCycles($maxCycles): static
    {
        $this->maxCycles = $maxCycles;

        return $this;
    }

    /**
     * Specific anchor dates upon which the billing interval calculations should be made.
     */
    public function setAnchors(array $anchors): static
    {
        $this->anchors = $anchors;

        return $this;
    }
}
