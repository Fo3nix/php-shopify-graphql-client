<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

/**
 * The result of the query to fetch delivery options for the subscription contract.
 */
class ShopifySubscriptionDeliveryOptionResultUnionObject extends UnionObject
{
    public function onShopifySubscriptionDeliveryOptionResultFailure(): ShopifySubscriptionDeliveryOptionResultFailureQueryObject
    {
        $object = new ShopifySubscriptionDeliveryOptionResultFailureQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionDeliveryOptionResultSuccess(): ShopifySubscriptionDeliveryOptionResultSuccessQueryObject
    {
        $object = new ShopifySubscriptionDeliveryOptionResultSuccessQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
