<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\UnionObject;

class ShopifyDeliveryConditionCriteriaUnionObject extends UnionObject
{
    public function onShopifyMoneyV2()
    {
        $object = new ShopifyMoneyV2QueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyWeight()
    {
        $object = new ShopifyWeightQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
