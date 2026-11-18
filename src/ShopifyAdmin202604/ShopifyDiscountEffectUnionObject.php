<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\UnionObject;

/**
 * The type of discount that will be applied. Currently, only a percentage discount is supported.
 */
class ShopifyDiscountEffectUnionObject extends UnionObject
{
    public function onShopifyDiscountAmount(): ShopifyDiscountAmountQueryObject
    {
        $object = new ShopifyDiscountAmountQueryObject();
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
