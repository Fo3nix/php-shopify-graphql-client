<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

/**
 * Represents the type of pricing associated to the selling plan (for example, a $10 or 20% discount that is set
 * for a limited period or that is fixed for the duration of the subscription). Selling plan pricing policies and
 * associated records (selling plan groups, selling plans, billing policy, and delivery policy) are deleted 48
 * hours after a merchant uninstalls their subscriptions app. We recommend backing up these records if you need
 * to restore them later.
 */
class ShopifySellingPlanPricingPolicyUnionObject extends UnionObject
{
    public function onShopifySellingPlanFixedPricingPolicy(): ShopifySellingPlanFixedPricingPolicyQueryObject
    {
        $object = new ShopifySellingPlanFixedPricingPolicyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySellingPlanRecurringPricingPolicy(): ShopifySellingPlanRecurringPricingPolicyQueryObject
    {
        $object = new ShopifySellingPlanRecurringPricingPolicyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
