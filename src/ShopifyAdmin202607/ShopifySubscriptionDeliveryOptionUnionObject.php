<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

/**
 * The delivery option for a subscription contract.
 */
class ShopifySubscriptionDeliveryOptionUnionObject extends UnionObject
{
    public function onShopifySubscriptionLocalDeliveryOption(): ShopifySubscriptionLocalDeliveryOptionQueryObject
    {
        $object = new ShopifySubscriptionLocalDeliveryOptionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionPickupOption(): ShopifySubscriptionPickupOptionQueryObject
    {
        $object = new ShopifySubscriptionPickupOptionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionShippingOption(): ShopifySubscriptionShippingOptionQueryObject
    {
        $object = new ShopifySubscriptionShippingOptionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
