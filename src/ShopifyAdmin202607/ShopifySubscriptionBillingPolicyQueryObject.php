<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a Subscription Billing Policy.
 */
class ShopifySubscriptionBillingPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingPolicy";

    /**
     * Specific anchor dates upon which the billing interval calculations should be made.
     */
    public function selectAnchors(?ShopifySubscriptionBillingPolicyAnchorsArgumentsObject $argsObject = null): ShopifySellingPlanAnchorQueryObject
    {
        $object = new ShopifySellingPlanAnchorQueryObject("anchors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The kind of interval that's associated with this schedule (e.g. Monthly, Weekly, etc).
     */
    public function selectInterval(): static
    {
        $this->selectField("interval");

        return $this;
    }

    /**
     * The number of billing intervals between invoices.
     */
    public function selectIntervalCount(): static
    {
        $this->selectField("intervalCount");

        return $this;
    }

    /**
     * Maximum amount of cycles after which the subscription ends.
     */
    public function selectMaxCycles(): static
    {
        $this->selectField("maxCycles");

        return $this;
    }

    /**
     * Minimum amount of cycles required in the subscription.
     */
    public function selectMinCycles(): static
    {
        $this->selectField("minCycles");

        return $this;
    }
}
