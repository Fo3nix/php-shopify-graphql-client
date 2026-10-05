<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

class ShopifyAppPricingDetailsUnionObject extends UnionObject
{
    public function onShopifyAppRecurringPricing()
    {
        $object = new ShopifyAppRecurringPricingQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyAppUsagePricing()
    {
        $object = new ShopifyAppUsagePricingQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
