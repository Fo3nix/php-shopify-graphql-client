<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

class ShopifySubscriptionDeliveryMethodUnionObject extends UnionObject
{
    public function onShopifySubscriptionDeliveryMethodLocalDelivery()
    {
        $object = new ShopifySubscriptionDeliveryMethodLocalDeliveryQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionDeliveryMethodPickup()
    {
        $object = new ShopifySubscriptionDeliveryMethodPickupQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionDeliveryMethodShipping()
    {
        $object = new ShopifySubscriptionDeliveryMethodShippingQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
