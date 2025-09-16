<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class DiscountCustomerBuysValueUnionObject extends UnionObject
{
    public function onDiscountPurchaseAmount()
    {
        $object = new DiscountPurchaseAmountQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountQuantity()
    {
        $object = new DiscountQuantityQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
