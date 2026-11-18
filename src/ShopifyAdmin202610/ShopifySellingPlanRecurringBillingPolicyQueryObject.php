<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a recurring selling plan billing policy.
 */
class ShopifySellingPlanRecurringBillingPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanRecurringBillingPolicy";

    /**
     * Specific anchor dates upon which the billing interval calculations should be made.
     */
    public function selectAnchors(?ShopifySellingPlanRecurringBillingPolicyAnchorsArgumentsObject $argsObject = null): ShopifySellingPlanAnchorQueryObject
    {
        $object = new ShopifySellingPlanAnchorQueryObject("anchors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the selling plan billing policy was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The billing frequency, it can be either: day, week, month or year.
     */
    public function selectInterval(): static
    {
        $this->selectField("interval");

        return $this;
    }

    /**
     * The number of intervals between billings.
     */
    public function selectIntervalCount(): static
    {
        $this->selectField("intervalCount");

        return $this;
    }

    /**
     * Maximum number of billing iterations.
     */
    public function selectMaxCycles(): static
    {
        $this->selectField("maxCycles");

        return $this;
    }

    /**
     * Minimum number of billing iterations.
     */
    public function selectMinCycles(): static
    {
        $this->selectField("minCycles");

        return $this;
    }
}
