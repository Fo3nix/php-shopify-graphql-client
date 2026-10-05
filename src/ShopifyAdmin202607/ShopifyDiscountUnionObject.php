<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

class ShopifyDiscountUnionObject extends UnionObject
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

    public function onShopifyDiscountCodeApp()
    {
        $object = new ShopifyDiscountCodeAppQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountCodeBasic()
    {
        $object = new ShopifyDiscountCodeBasicQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountCodeBxgy()
    {
        $object = new ShopifyDiscountCodeBxgyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountCodeFreeShipping()
    {
        $object = new ShopifyDiscountCodeFreeShippingQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
