<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

/**
 * Represents the billing frequency associated to the selling plan (for example, bill every week, or bill every
 * three months). The selling plan billing policy and associated records (selling plan groups, selling plans, pricing
 * policies, and delivery policy) are deleted 48 hours after a merchant uninstalls their subscriptions app.
 * We recommend backing up these records if you need to restore them later.
 */
class ShopifySellingPlanBillingPolicyUnionObject extends UnionObject
{
    public function onShopifySellingPlanFixedBillingPolicy(): ShopifySellingPlanFixedBillingPolicyQueryObject
    {
        $object = new ShopifySellingPlanFixedBillingPolicyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySellingPlanRecurringBillingPolicy(): ShopifySellingPlanRecurringBillingPolicyQueryObject
    {
        $object = new ShopifySellingPlanRecurringBillingPolicyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
