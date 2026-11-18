<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

/**
 * A discount offers promotional value and can be applied by entering a code or automatically when conditions are met. Discounts can provide fixed amounts, percentage reductions, free shipping, or Buy X Get Y (BXGY) benefits on specific products or the entire order. For more complex scenarios, developers can use Function-backed discounts to create custom discount configurations.
 */
class ShopifyDiscountUnionObject extends UnionObject
{
    public function onShopifyDiscountAutomaticApp(): ShopifyDiscountAutomaticAppQueryObject
    {
        $object = new ShopifyDiscountAutomaticAppQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountAutomaticBasic(): ShopifyDiscountAutomaticBasicQueryObject
    {
        $object = new ShopifyDiscountAutomaticBasicQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountAutomaticBxgy(): ShopifyDiscountAutomaticBxgyQueryObject
    {
        $object = new ShopifyDiscountAutomaticBxgyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountAutomaticFreeShipping(): ShopifyDiscountAutomaticFreeShippingQueryObject
    {
        $object = new ShopifyDiscountAutomaticFreeShippingQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountCodeApp(): ShopifyDiscountCodeAppQueryObject
    {
        $object = new ShopifyDiscountCodeAppQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountCodeBasic(): ShopifyDiscountCodeBasicQueryObject
    {
        $object = new ShopifyDiscountCodeBasicQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountCodeBxgy(): ShopifyDiscountCodeBxgyQueryObject
    {
        $object = new ShopifyDiscountCodeBxgyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountCodeFreeShipping(): ShopifyDiscountCodeFreeShippingQueryObject
    {
        $object = new ShopifyDiscountCodeFreeShippingQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
