<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a recurring selling plan delivery policy.
 */
class ShopifySellingPlanRecurringDeliveryPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanRecurringDeliveryPolicy";

    /**
     * The specific anchor dates upon which the delivery interval calculations should be made.
     */
    public function selectAnchors(?ShopifySellingPlanRecurringDeliveryPolicyAnchorsArgumentsObject $argsObject = null): ShopifySellingPlanAnchorQueryObject
    {
        $object = new ShopifySellingPlanAnchorQueryObject("anchors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the selling plan delivery policy was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * Number of days which represent a buffer period for orders to be included in a cycle.
     */
    public function selectCutoff(): static
    {
        $this->selectField("cutoff");

        return $this;
    }

    /**
     * Whether the delivery policy is merchant or buyer-centric.
     * Buyer-centric delivery policies state the time when the buyer will receive the goods.
     * Merchant-centric delivery policies state the time when the fulfillment should be started.
     * Currently, only merchant-centric delivery policies are supported.
     */
    public function selectIntent(): static
    {
        $this->selectField("intent");

        return $this;
    }

    /**
     * The delivery frequency, it can be either: day, week, month or year.
     */
    public function selectInterval(): static
    {
        $this->selectField("interval");

        return $this;
    }

    /**
     * The number of intervals between deliveries.
     */
    public function selectIntervalCount(): static
    {
        $this->selectField("intervalCount");

        return $this;
    }

    /**
     * The fulfillment or delivery behavior of the first fulfillment when the order is placed before the anchor. The default value for this field is `ASAP`.
     */
    public function selectPreAnchorBehavior(): static
    {
        $this->selectField("preAnchorBehavior");

        return $this;
    }
}
