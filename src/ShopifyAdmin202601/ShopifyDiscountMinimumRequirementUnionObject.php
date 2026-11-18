<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\UnionObject;

/**
 * The type of minimum requirement that must be met for the discount to be applied. For example, a customer must spend a minimum subtotal to be eligible for the discount. Alternatively, a customer must purchase a minimum quantity of items to be eligible for the discount.
 */
class ShopifyDiscountMinimumRequirementUnionObject extends UnionObject
{
    public function onShopifyDiscountMinimumQuantity(): ShopifyDiscountMinimumQuantityQueryObject
    {
        $object = new ShopifyDiscountMinimumQuantityQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountMinimumSubtotal(): ShopifyDiscountMinimumSubtotalQueryObject
    {
        $object = new ShopifyDiscountMinimumSubtotalQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
