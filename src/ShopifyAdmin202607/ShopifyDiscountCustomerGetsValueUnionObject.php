<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

/**
 * The type of the discount value and how it will be applied. For example, it might be a percentage discount on a fixed number of items. Alternatively, it might be a fixed amount evenly distributed across all items or on each individual item. A third example is a percentage discount on all items.
 */
class ShopifyDiscountCustomerGetsValueUnionObject extends UnionObject
{
    public function onShopifyDiscountAmount(): ShopifyDiscountAmountQueryObject
    {
        $object = new ShopifyDiscountAmountQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountOnQuantity(): ShopifyDiscountOnQuantityQueryObject
    {
        $object = new ShopifyDiscountOnQuantityQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountPercentage(): ShopifyDiscountPercentageQueryObject
    {
        $object = new ShopifyDiscountPercentageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
