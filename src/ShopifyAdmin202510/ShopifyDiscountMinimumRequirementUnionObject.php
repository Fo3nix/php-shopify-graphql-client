<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\UnionObject;

class ShopifyDiscountMinimumRequirementUnionObject extends UnionObject
{
    public function onShopifyDiscountMinimumQuantity()
    {
        $object = new ShopifyDiscountMinimumQuantityQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountMinimumSubtotal()
    {
        $object = new ShopifyDiscountMinimumSubtotalQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
