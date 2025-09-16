<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class SubscriptionDeliveryOptionUnionObject extends UnionObject
{
    public function onSubscriptionLocalDeliveryOption()
    {
        $object = new SubscriptionLocalDeliveryOptionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionPickupOption()
    {
        $object = new SubscriptionPickupOptionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionShippingOption()
    {
        $object = new SubscriptionShippingOptionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
