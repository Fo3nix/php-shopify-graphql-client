<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\UnionObject;

class ShopifySellingPlanCheckoutChargeValueUnionObject extends UnionObject
{
    public function onShopifyMoneyV2()
    {
        $object = new ShopifyMoneyV2QueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySellingPlanCheckoutChargePercentageValue()
    {
        $object = new ShopifySellingPlanCheckoutChargePercentageValueQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
