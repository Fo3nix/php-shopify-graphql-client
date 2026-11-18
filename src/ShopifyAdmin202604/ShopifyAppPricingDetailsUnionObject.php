<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\UnionObject;

/**
 * The information about the price that's charged to a shop every plan period.
 * The concrete type can be `AppRecurringPricing` for recurring billing or `AppUsagePricing` for usage-based billing.
 */
class ShopifyAppPricingDetailsUnionObject extends UnionObject
{
    public function onShopifyAppRecurringPricing(): ShopifyAppRecurringPricingQueryObject
    {
        $object = new ShopifyAppRecurringPricingQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyAppUsagePricing(): ShopifyAppUsagePricingQueryObject
    {
        $object = new ShopifyAppUsagePricingQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
