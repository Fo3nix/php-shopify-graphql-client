<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

class ShopifySubscriptionDeliveryOptionResultUnionObject extends UnionObject
{
    public function onShopifySubscriptionDeliveryOptionResultFailure()
    {
        $object = new ShopifySubscriptionDeliveryOptionResultFailureQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionDeliveryOptionResultSuccess()
    {
        $object = new ShopifySubscriptionDeliveryOptionResultSuccessQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
