<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to create or update a recurring billing policy.
 */
class ShopifySellingPlanRecurringBillingPolicyInputInputObject extends InputObject
{
    protected $interval;
    protected $intervalCount;
    protected $anchors;
    protected $minCycles;
    protected $maxCycles;

    /**
     * The billing frequency, it can be either: day, week, month or year.
     */
    public function setInterval($shopifySellingPlanInterval): static
    {
        $this->interval = new RawObject($shopifySellingPlanInterval);

        return $this;
    }

    /**
     * The number of intervals between billings.
     */
    public function setIntervalCount($intervalCount): static
    {
        $this->intervalCount = $intervalCount;

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

    /**
     * Minimum number of billing iterations.
     */
    public function setMinCycles($minCycles): static
    {
        $this->minCycles = $minCycles;

        return $this;
    }

    /**
     * Maximum number of billing iterations.
     */
    public function setMaxCycles($maxCycles): static
    {
        $this->maxCycles = $maxCycles;

        return $this;
    }
}
