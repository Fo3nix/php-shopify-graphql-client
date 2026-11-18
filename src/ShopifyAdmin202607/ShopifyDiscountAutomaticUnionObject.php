<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

/**
 * The types of automatic discounts applied in the cart and at checkout when an order meets specific criteria.
 *
 * Includes [`DiscountAutomaticApp`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountAutomaticApp) for custom logic using the [Discount Function API](https://shopify.dev/docs/api/functions/latest/discount), [`DiscountAutomaticBasic`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountAutomaticBasic) for percentage or fixed amount reductions, [`DiscountAutomaticBxgy`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountAutomaticBxgy) for Buy X Get Y promotions, and [`DiscountAutomaticFreeShipping`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountAutomaticFreeShipping) for delivery incentives.
 */
class ShopifyDiscountAutomaticUnionObject extends UnionObject
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
}
