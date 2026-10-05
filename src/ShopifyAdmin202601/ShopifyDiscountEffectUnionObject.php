<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\UnionObject;

class ShopifyDiscountEffectUnionObject extends UnionObject
{
    public function onShopifyDiscountAmount()
    {
        $object = new ShopifyDiscountAmountQueryObject();
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
