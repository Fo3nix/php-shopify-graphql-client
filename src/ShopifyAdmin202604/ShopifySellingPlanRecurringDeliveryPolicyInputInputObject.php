<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields to create or update a recurring delivery policy.
 */
class ShopifySellingPlanRecurringDeliveryPolicyInputInputObject extends InputObject
{
    protected $interval;
    protected $intervalCount;
    protected $anchors;
    protected $cutoff;
    protected $intent;
    protected $preAnchorBehavior;

    /**
     * The delivery frequency, it can be either: day, week, month or year.
     */
    public function setInterval($shopifySellingPlanInterval): static
    {
        $this->interval = new RawObject($shopifySellingPlanInterval);

        return $this;
    }

    /**
     * The number of intervals between deliveries.
     */
    public function setIntervalCount($intervalCount): static
    {
        $this->intervalCount = $intervalCount;

        return $this;
    }

    /**
     * The specific anchor dates upon which the delivery interval calculations should be made.
     */
    public function setAnchors(array $anchors): static
    {
        $this->anchors = $anchors;

        return $this;
    }

    /**
     * Number of days which represent a buffer period for orders to be included in a cycle.
     */
    public function setCutoff($cutoff): static
    {
        $this->cutoff = $cutoff;

        return $this;
    }

    /**
     * Intention of this delivery policy, it can be either: delivery or fulfillment.
     */
    public function setIntent($shopifySellingPlanRecurringDeliveryPolicyIntent): static
    {
        $this->intent = new RawObject($shopifySellingPlanRecurringDeliveryPolicyIntent);

        return $this;
    }

    /**
     * The pre-anchor behavior. It can be either: asap or next.
     */
    public function setPreAnchorBehavior($shopifySellingPlanRecurringDeliveryPolicyPreAnchorBehavior): static
    {
        $this->preAnchorBehavior = new RawObject($shopifySellingPlanRecurringDeliveryPolicyPreAnchorBehavior);

        return $this;
    }
}
