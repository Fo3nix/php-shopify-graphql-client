<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

/**
 * The type of discount associated with the discount code. For example, the discount code might offer a basic discount of a fixed percentage, or a fixed amount, on specific products or the order. Alternatively, the discount might offer the customer free shipping on their order. A third option is a Buy X, Get Y (BXGY) discount, which offers a customer discounts on select products if they add a specific product to their order.
 */
class ShopifyDiscountCodeUnionObject extends UnionObject
{
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
