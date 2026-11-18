<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

/**
 * Subscription draft discount types.
 */
class ShopifySubscriptionDiscountUnionObject extends UnionObject
{
    public function onShopifySubscriptionAppliedCodeDiscount(): ShopifySubscriptionAppliedCodeDiscountQueryObject
    {
        $object = new ShopifySubscriptionAppliedCodeDiscountQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionManualDiscount(): ShopifySubscriptionManualDiscountQueryObject
    {
        $object = new ShopifySubscriptionManualDiscountQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
