<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

class ShopifySubscriptionDeliveryOptionUnionObject extends UnionObject
{
    public function onShopifySubscriptionLocalDeliveryOption()
    {
        $object = new ShopifySubscriptionLocalDeliveryOptionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionPickupOption()
    {
        $object = new ShopifySubscriptionPickupOptionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionShippingOption()
    {
        $object = new ShopifySubscriptionShippingOptionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
