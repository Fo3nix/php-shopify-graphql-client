<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class SubscriptionDeliveryOptionResultUnionObject extends UnionObject
{
    public function onSubscriptionDeliveryOptionResultFailure()
    {
        $object = new SubscriptionDeliveryOptionResultFailureQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionDeliveryOptionResultSuccess()
    {
        $object = new SubscriptionDeliveryOptionResultSuccessQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
