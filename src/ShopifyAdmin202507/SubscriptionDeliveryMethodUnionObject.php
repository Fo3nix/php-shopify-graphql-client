<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class SubscriptionDeliveryMethodUnionObject extends UnionObject
{
    public function onSubscriptionDeliveryMethodLocalDelivery()
    {
        $object = new SubscriptionDeliveryMethodLocalDeliveryQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionDeliveryMethodPickup()
    {
        $object = new SubscriptionDeliveryMethodPickupQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionDeliveryMethodShipping()
    {
        $object = new SubscriptionDeliveryMethodShippingQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
