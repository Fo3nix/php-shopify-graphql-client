<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

class ShopifySubscriptionContractCalculationUnionObject extends UnionObject
{
    public function onShopifySubscriptionContractCalculationFailure()
    {
        $object = new ShopifySubscriptionContractCalculationFailureQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionContractCalculationPending()
    {
        $object = new ShopifySubscriptionContractCalculationPendingQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionContractCalculationSuccess()
    {
        $object = new ShopifySubscriptionContractCalculationSuccessQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
