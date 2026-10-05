<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\UnionObject;

class ShopifyDiscountItemsUnionObject extends UnionObject
{
    public function onShopifyAllDiscountItems()
    {
        $object = new ShopifyAllDiscountItemsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountCollections()
    {
        $object = new ShopifyDiscountCollectionsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountProducts()
    {
        $object = new ShopifyDiscountProductsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
