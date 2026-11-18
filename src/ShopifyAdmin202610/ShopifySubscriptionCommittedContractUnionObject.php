<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

/**
 * The committed result of a subscription contract calculation.
 */
class ShopifySubscriptionCommittedContractUnionObject extends UnionObject
{
    public function onShopifySubscriptionBillingCycleEditedContract(): ShopifySubscriptionBillingCycleEditedContractQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleEditedContractQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionContract(): ShopifySubscriptionContractQueryObject
    {
        $object = new ShopifySubscriptionContractQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
