<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\UnionObject;

/**
 * Represents the delivery frequency associated to the selling plan (for example, deliver every month, or deliver
 * every other week). The selling plan delivery policy and associated records (selling plan groups, selling plans,
 * pricing policies, and billing policy) are deleted 48 hours after a merchant uninstalls their subscriptions app.
 * We recommend backing up these records if you need to restore them later.
 */
class ShopifySellingPlanDeliveryPolicyUnionObject extends UnionObject
{
    public function onShopifySellingPlanFixedDeliveryPolicy(): ShopifySellingPlanFixedDeliveryPolicyQueryObject
    {
        $object = new ShopifySellingPlanFixedDeliveryPolicyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySellingPlanRecurringDeliveryPolicy(): ShopifySellingPlanRecurringDeliveryPolicyQueryObject
    {
        $object = new ShopifySellingPlanRecurringDeliveryPolicyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
