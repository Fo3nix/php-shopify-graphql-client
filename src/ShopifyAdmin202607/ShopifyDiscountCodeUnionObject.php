<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

class ShopifyDiscountCodeUnionObject extends UnionObject
{
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
