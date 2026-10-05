<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

class ShopifySubscriptionShippingOptionResultUnionObject extends UnionObject
{
    public function onShopifySubscriptionShippingOptionResultFailure()
    {
        $object = new ShopifySubscriptionShippingOptionResultFailureQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionShippingOptionResultSuccess()
    {
        $object = new ShopifySubscriptionShippingOptionResultSuccessQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
