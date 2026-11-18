<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

/**
 * An available delivery option for a subscription contract calculation.
 */
class ShopifySubscriptionContractCalculationDeliveryOptionUnionObject extends UnionObject
{
    public function onShopifySubscriptionContractCalculationLocalDeliveryOption(): ShopifySubscriptionContractCalculationLocalDeliveryOptionQueryObject
    {
        $object = new ShopifySubscriptionContractCalculationLocalDeliveryOptionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionContractCalculationPickupOption(): ShopifySubscriptionContractCalculationPickupOptionQueryObject
    {
        $object = new ShopifySubscriptionContractCalculationPickupOptionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionContractCalculationShippingOption(): ShopifySubscriptionContractCalculationShippingOptionQueryObject
    {
        $object = new ShopifySubscriptionContractCalculationShippingOptionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
