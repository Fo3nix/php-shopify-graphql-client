<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class DeliveryConditionCriteriaUnionObject extends UnionObject
{
    public function onMoneyV2()
    {
        $object = new MoneyV2QueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onWeight()
    {
        $object = new WeightQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
