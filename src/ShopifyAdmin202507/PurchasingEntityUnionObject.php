<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class PurchasingEntityUnionObject extends UnionObject
{
    public function onCustomer()
    {
        $object = new CustomerQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPurchasingCompany()
    {
        $object = new PurchasingCompanyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
