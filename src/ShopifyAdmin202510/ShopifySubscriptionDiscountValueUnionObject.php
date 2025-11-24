<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\UnionObject;

class ShopifySubscriptionDiscountValueUnionObject extends UnionObject
{
    public function onShopifySubscriptionDiscountFixedAmountValue()
    {
        $object = new ShopifySubscriptionDiscountFixedAmountValueQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionDiscountPercentageValue()
    {
        $object = new ShopifySubscriptionDiscountPercentageValueQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
