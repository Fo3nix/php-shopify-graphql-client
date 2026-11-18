<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\UnionObject;

/**
 * Describes the delivery method to use to get the physical goods to the customer.
 */
class ShopifySubscriptionDeliveryMethodUnionObject extends UnionObject
{
    public function onShopifySubscriptionDeliveryMethodLocalDelivery(): ShopifySubscriptionDeliveryMethodLocalDeliveryQueryObject
    {
        $object = new ShopifySubscriptionDeliveryMethodLocalDeliveryQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionDeliveryMethodPickup(): ShopifySubscriptionDeliveryMethodPickupQueryObject
    {
        $object = new ShopifySubscriptionDeliveryMethodPickupQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionDeliveryMethodShipping(): ShopifySubscriptionDeliveryMethodShippingQueryObject
    {
        $object = new ShopifySubscriptionDeliveryMethodShippingQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
