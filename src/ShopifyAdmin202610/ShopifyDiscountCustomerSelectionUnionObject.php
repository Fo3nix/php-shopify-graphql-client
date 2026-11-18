<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

/**
 * The type used for targeting a set of customers who are eligible for the discount. For example, the discount might be available to all customers or it might only be available to a specific set of customers. You can define the set of customers by targeting a list of customer segments, or by targeting a list of specific customers.
 */
class ShopifyDiscountCustomerSelectionUnionObject extends UnionObject
{
    public function onShopifyDiscountCustomerAll(): ShopifyDiscountCustomerAllQueryObject
    {
        $object = new ShopifyDiscountCustomerAllQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountCustomerSegments(): ShopifyDiscountCustomerSegmentsQueryObject
    {
        $object = new ShopifyDiscountCustomerSegmentsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountCustomerSelectionUnknown(): ShopifyDiscountCustomerSelectionUnknownQueryObject
    {
        $object = new ShopifyDiscountCustomerSelectionUnknownQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountCustomers(): ShopifyDiscountCustomersQueryObject
    {
        $object = new ShopifyDiscountCustomersQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
