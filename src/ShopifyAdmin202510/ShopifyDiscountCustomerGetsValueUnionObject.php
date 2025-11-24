<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\UnionObject;

class ShopifyDiscountCustomerGetsValueUnionObject extends UnionObject
{
    public function onShopifyDiscountAmount()
    {
        $object = new ShopifyDiscountAmountQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountOnQuantity()
    {
        $object = new ShopifyDiscountOnQuantityQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountPercentage()
    {
        $object = new ShopifyDiscountPercentageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
