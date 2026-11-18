<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

/**
 * The value (weight or price) that the condition field is compared to.
 */
class ShopifyDeliveryConditionCriteriaUnionObject extends UnionObject
{
    public function onShopifyMoneyV2(): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyWeight(): ShopifyWeightQueryObject
    {
        $object = new ShopifyWeightQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
