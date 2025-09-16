<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class DiscountMinimumRequirementUnionObject extends UnionObject
{
    public function onDiscountMinimumQuantity()
    {
        $object = new DiscountMinimumQuantityQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountMinimumSubtotal()
    {
        $object = new DiscountMinimumSubtotalQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
