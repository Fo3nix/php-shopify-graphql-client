<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

class ShopifySubscriptionBillingAttemptStateUnionObject extends UnionObject
{
    public function onShopifySubscriptionBillingAttemptActionRequiredState()
    {
        $object = new ShopifySubscriptionBillingAttemptActionRequiredStateQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionBillingAttemptFailedState()
    {
        $object = new ShopifySubscriptionBillingAttemptFailedStateQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionBillingAttemptPendingState()
    {
        $object = new ShopifySubscriptionBillingAttemptPendingStateQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionBillingAttemptSuccessState()
    {
        $object = new ShopifySubscriptionBillingAttemptSuccessStateQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
