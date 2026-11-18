<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\UnionObject;

/**
 * The prerequisite for the discount to be applicable. For example, the discount might require a customer to buy a minimum quantity of select items. Alternatively, the discount might require a customer to spend a minimum amount on select items.
 */
class ShopifyDiscountCustomerBuysValueUnionObject extends UnionObject
{
    public function onShopifyDiscountPurchaseAmount(): ShopifyDiscountPurchaseAmountQueryObject
    {
        $object = new ShopifyDiscountPurchaseAmountQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountQuantity(): ShopifyDiscountQuantityQueryObject
    {
        $object = new ShopifyDiscountQuantityQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
