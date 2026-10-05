<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

class ShopifyDiscountContextUnionObject extends UnionObject
{
    public function onShopifyDiscountBuyerSelectionAll()
    {
        $object = new ShopifyDiscountBuyerSelectionAllQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountContextUnknown()
    {
        $object = new ShopifyDiscountContextUnknownQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountCustomerSegments()
    {
        $object = new ShopifyDiscountCustomerSegmentsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountCustomers()
    {
        $object = new ShopifyDiscountCustomersQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountMarkets()
    {
        $object = new ShopifyDiscountMarketsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
