<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

/**
 * The type used to define which buyers can use the discount.
 */
class ShopifyDiscountContextUnionObject extends UnionObject
{
    public function onShopifyDiscountBuyerSelectionAll(): ShopifyDiscountBuyerSelectionAllQueryObject
    {
        $object = new ShopifyDiscountBuyerSelectionAllQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountCustomerSegments(): ShopifyDiscountCustomerSegmentsQueryObject
    {
        $object = new ShopifyDiscountCustomerSegmentsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountCustomers(): ShopifyDiscountCustomersQueryObject
    {
        $object = new ShopifyDiscountCustomersQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountMarkets(): ShopifyDiscountMarketsQueryObject
    {
        $object = new ShopifyDiscountMarketsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
