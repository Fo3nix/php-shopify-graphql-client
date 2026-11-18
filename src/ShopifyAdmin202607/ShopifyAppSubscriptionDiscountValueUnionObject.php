<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

/**
 * The value of the discount.
 */
class ShopifyAppSubscriptionDiscountValueUnionObject extends UnionObject
{
    public function onShopifyAppSubscriptionDiscountAmount(): ShopifyAppSubscriptionDiscountAmountQueryObject
    {
        $object = new ShopifyAppSubscriptionDiscountAmountQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyAppSubscriptionDiscountPercentage(): ShopifyAppSubscriptionDiscountPercentageQueryObject
    {
        $object = new ShopifyAppSubscriptionDiscountPercentageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
