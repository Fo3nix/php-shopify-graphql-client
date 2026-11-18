<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\UnionObject;

/**
 * Represents information about the purchasing entity for the order or draft order.
 */
class ShopifyPurchasingEntityUnionObject extends UnionObject
{
    public function onShopifyCustomer(): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyPurchasingCompany(): ShopifyPurchasingCompanyQueryObject
    {
        $object = new ShopifyPurchasingCompanyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
