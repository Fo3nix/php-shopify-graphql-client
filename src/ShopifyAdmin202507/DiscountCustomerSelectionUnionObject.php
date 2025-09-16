<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class DiscountCustomerSelectionUnionObject extends UnionObject
{
    public function onDiscountCustomerAll()
    {
        $object = new DiscountCustomerAllQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountCustomerSegments()
    {
        $object = new DiscountCustomerSegmentsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountCustomers()
    {
        $object = new DiscountCustomersQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
