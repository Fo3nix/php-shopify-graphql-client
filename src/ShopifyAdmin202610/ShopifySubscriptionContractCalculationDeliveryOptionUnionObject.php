<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

class ShopifySubscriptionContractCalculationDeliveryOptionUnionObject extends UnionObject
{
    public function onShopifySubscriptionContractCalculationLocalDeliveryOption()
    {
        $object = new ShopifySubscriptionContractCalculationLocalDeliveryOptionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionContractCalculationPickupOption()
    {
        $object = new ShopifySubscriptionContractCalculationPickupOptionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionContractCalculationShippingOption()
    {
        $object = new ShopifySubscriptionContractCalculationShippingOptionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
