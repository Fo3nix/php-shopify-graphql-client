<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\UnionObject;

/**
 * The type of value given to a customer when a discount is applied to an order. For example, the application of the discount might give the customer a percentage off a specified item. Alternatively, the application of the discount might give the customer a monetary value in a given currency off an order.
 */
class ShopifyPricingValueUnionObject extends UnionObject
{
    public function onShopifyMoneyV2(): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyPricingPercentageValue(): ShopifyPricingPercentageValueQueryObject
    {
        $object = new ShopifyPricingPercentageValueQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
