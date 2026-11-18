<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

/**
 * The result of the query to fetch shipping options for the subscription contract.
 */
class ShopifySubscriptionShippingOptionResultUnionObject extends UnionObject
{
    public function onShopifySubscriptionShippingOptionResultFailure(): ShopifySubscriptionShippingOptionResultFailureQueryObject
    {
        $object = new ShopifySubscriptionShippingOptionResultFailureQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionShippingOptionResultSuccess(): ShopifySubscriptionShippingOptionResultSuccessQueryObject
    {
        $object = new ShopifySubscriptionShippingOptionResultSuccessQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
