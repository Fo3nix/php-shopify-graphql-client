<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class SubscriptionDiscountUnionObject extends UnionObject
{
    public function onSubscriptionAppliedCodeDiscount()
    {
        $object = new SubscriptionAppliedCodeDiscountQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionManualDiscount()
    {
        $object = new SubscriptionManualDiscountQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
