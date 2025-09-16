<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class AppPricingDetailsUnionObject extends UnionObject
{
    public function onAppRecurringPricing()
    {
        $object = new AppRecurringPricingQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAppUsagePricing()
    {
        $object = new AppUsagePricingQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
