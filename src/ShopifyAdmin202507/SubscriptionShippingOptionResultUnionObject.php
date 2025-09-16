<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class SubscriptionShippingOptionResultUnionObject extends UnionObject
{
    public function onSubscriptionShippingOptionResultFailure()
    {
        $object = new SubscriptionShippingOptionResultFailureQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionShippingOptionResultSuccess()
    {
        $object = new SubscriptionShippingOptionResultSuccessQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
