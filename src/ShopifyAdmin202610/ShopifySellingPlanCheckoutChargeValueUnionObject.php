<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

/**
 * The portion of the price to be charged at checkout.
 */
class ShopifySellingPlanCheckoutChargeValueUnionObject extends UnionObject
{
    public function onShopifyMoneyV2(): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySellingPlanCheckoutChargePercentageValue(): ShopifySellingPlanCheckoutChargePercentageValueQueryObject
    {
        $object = new ShopifySellingPlanCheckoutChargePercentageValueQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
