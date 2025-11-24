<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\UnionObject;

class ShopifyPurchasingEntityUnionObject extends UnionObject
{
    public function onShopifyCustomer()
    {
        $object = new ShopifyCustomerQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyPurchasingCompany()
    {
        $object = new ShopifyPurchasingCompanyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
