<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\UnionObject;

class ShopifyDiscountCustomerBuysValueUnionObject extends UnionObject
{
    public function onShopifyDiscountPurchaseAmount()
    {
        $object = new ShopifyDiscountPurchaseAmountQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountQuantity()
    {
        $object = new ShopifyDiscountQuantityQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
