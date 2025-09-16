<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class DiscountCustomerGetsValueUnionObject extends UnionObject
{
    public function onDiscountAmount()
    {
        $object = new DiscountAmountQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountOnQuantity()
    {
        $object = new DiscountOnQuantityQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountPercentage()
    {
        $object = new DiscountPercentageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
