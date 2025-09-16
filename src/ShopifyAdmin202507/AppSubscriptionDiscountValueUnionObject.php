<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class AppSubscriptionDiscountValueUnionObject extends UnionObject
{
    public function onAppSubscriptionDiscountAmount()
    {
        $object = new AppSubscriptionDiscountAmountQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAppSubscriptionDiscountPercentage()
    {
        $object = new AppSubscriptionDiscountPercentageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
