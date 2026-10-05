<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

class ShopifyDiscountCustomerSelectionUnionObject extends UnionObject
{
    public function onShopifyDiscountCustomerAll()
    {
        $object = new ShopifyDiscountCustomerAllQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountCustomerSegments()
    {
        $object = new ShopifyDiscountCustomerSegmentsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountCustomerSelectionUnknown()
    {
        $object = new ShopifyDiscountCustomerSelectionUnknownQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountCustomers()
    {
        $object = new ShopifyDiscountCustomersQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
