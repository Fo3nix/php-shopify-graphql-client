<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class SubscriptionDiscountValueUnionObject extends UnionObject
{
    public function onSubscriptionDiscountFixedAmountValue()
    {
        $object = new SubscriptionDiscountFixedAmountValueQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionDiscountPercentageValue()
    {
        $object = new SubscriptionDiscountPercentageValueQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
