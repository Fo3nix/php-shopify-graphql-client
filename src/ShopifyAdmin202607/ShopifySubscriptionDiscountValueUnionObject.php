<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

/**
 * The value of the discount and how it will be applied.
 */
class ShopifySubscriptionDiscountValueUnionObject extends UnionObject
{
    public function onShopifySubscriptionDiscountFixedAmountValue(): ShopifySubscriptionDiscountFixedAmountValueQueryObject
    {
        $object = new ShopifySubscriptionDiscountFixedAmountValueQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionDiscountPercentageValue(): ShopifySubscriptionDiscountPercentageValueQueryObject
    {
        $object = new ShopifySubscriptionDiscountPercentageValueQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
