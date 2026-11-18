<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to create or update a fixed delivery policy.
 */
class ShopifySellingPlanFixedDeliveryPolicyInputInputObject extends InputObject
{
    protected $anchors;
    protected $fulfillmentTrigger;
    protected $fulfillmentExactTime;
    protected $cutoff;
    protected $intent;
    protected $preAnchorBehavior;

    /**
     * The specific anchor dates upon which the delivery interval calculations should be made.
     */
    public function setAnchors(array $anchors): static
    {
        $this->anchors = $anchors;

        return $this;
    }

    /**
     * What triggers the fulfillment.
     */
    public function setFulfillmentTrigger($shopifySellingPlanFulfillmentTrigger): static
    {
        $this->fulfillmentTrigger = new RawObject($shopifySellingPlanFulfillmentTrigger);

        return $this;
    }

    /**
     * The date and time when the fulfillment should trigger.
     */
    public function setFulfillmentExactTime($fulfillmentExactTime): static
    {
        $this->fulfillmentExactTime = $fulfillmentExactTime;

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
     * Whether the delivery policy is merchant or buyer-centric.
     */
    public function setIntent($shopifySellingPlanFixedDeliveryPolicyIntent): static
    {
        $this->intent = new RawObject($shopifySellingPlanFixedDeliveryPolicyIntent);

        return $this;
    }

    /**
     * The pre-anchor behavior.
     */
    public function setPreAnchorBehavior($shopifySellingPlanFixedDeliveryPolicyPreAnchorBehavior): static
    {
        $this->preAnchorBehavior = new RawObject($shopifySellingPlanFixedDeliveryPolicyPreAnchorBehavior);

        return $this;
    }
}
