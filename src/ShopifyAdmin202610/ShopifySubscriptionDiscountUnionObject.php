<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

class ShopifySubscriptionDiscountUnionObject extends UnionObject
{
    public function onShopifySubscriptionAppliedCodeDiscount()
    {
        $object = new ShopifySubscriptionAppliedCodeDiscountQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionManualDiscount()
    {
        $object = new ShopifySubscriptionManualDiscountQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
