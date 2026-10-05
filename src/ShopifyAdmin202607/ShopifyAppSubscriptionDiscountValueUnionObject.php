<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

class ShopifyAppSubscriptionDiscountValueUnionObject extends UnionObject
{
    public function onShopifyAppSubscriptionDiscountAmount()
    {
        $object = new ShopifyAppSubscriptionDiscountAmountQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyAppSubscriptionDiscountPercentage()
    {
        $object = new ShopifyAppSubscriptionDiscountPercentageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
