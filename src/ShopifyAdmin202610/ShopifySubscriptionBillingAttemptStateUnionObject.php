<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

/**
 * The state of a subscription billing attempt with state-specific data.
 */
class ShopifySubscriptionBillingAttemptStateUnionObject extends UnionObject
{
    public function onShopifySubscriptionBillingAttemptActionRequiredState(): ShopifySubscriptionBillingAttemptActionRequiredStateQueryObject
    {
        $object = new ShopifySubscriptionBillingAttemptActionRequiredStateQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionBillingAttemptFailedState(): ShopifySubscriptionBillingAttemptFailedStateQueryObject
    {
        $object = new ShopifySubscriptionBillingAttemptFailedStateQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionBillingAttemptPendingState(): ShopifySubscriptionBillingAttemptPendingStateQueryObject
    {
        $object = new ShopifySubscriptionBillingAttemptPendingStateQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionBillingAttemptSuccessState(): ShopifySubscriptionBillingAttemptSuccessStateQueryObject
    {
        $object = new ShopifySubscriptionBillingAttemptSuccessStateQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
