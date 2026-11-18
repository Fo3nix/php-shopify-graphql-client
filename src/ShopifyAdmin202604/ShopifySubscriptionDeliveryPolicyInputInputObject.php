<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a Subscription Delivery Policy.
 */
class ShopifySubscriptionDeliveryPolicyInputInputObject extends InputObject
{
    const REQUIRED = ["interval", "intervalCount"];

    protected $interval;
    protected $intervalCount;
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
     * The specific anchor dates upon which the delivery interval calculations should be made.
     */
    public function setAnchors(array $anchors): static
    {
        $this->anchors = $anchors;

        return $this;
    }
}
