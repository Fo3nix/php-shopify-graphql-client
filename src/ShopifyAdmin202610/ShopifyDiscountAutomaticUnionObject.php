<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

class ShopifyDiscountAutomaticUnionObject extends UnionObject
{
    public function onShopifyDiscountAutomaticApp()
    {
        $object = new ShopifyDiscountAutomaticAppQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountAutomaticBasic()
    {
        $object = new ShopifyDiscountAutomaticBasicQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountAutomaticBxgy()
    {
        $object = new ShopifyDiscountAutomaticBxgyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountAutomaticFreeShipping()
    {
        $object = new ShopifyDiscountAutomaticFreeShippingQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
