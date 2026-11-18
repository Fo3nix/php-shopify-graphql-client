<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

/**
 * A change that has been applied to an order.
 */
class ShopifyOrderStagedChangeUnionObject extends UnionObject
{
    public function onShopifyOrderStagedChangeAddCustomItem(): ShopifyOrderStagedChangeAddCustomItemQueryObject
    {
        $object = new ShopifyOrderStagedChangeAddCustomItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyOrderStagedChangeAddLineItemDiscount(): ShopifyOrderStagedChangeAddLineItemDiscountQueryObject
    {
        $object = new ShopifyOrderStagedChangeAddLineItemDiscountQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyOrderStagedChangeAddShippingLine(): ShopifyOrderStagedChangeAddShippingLineQueryObject
    {
        $object = new ShopifyOrderStagedChangeAddShippingLineQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyOrderStagedChangeAddVariant(): ShopifyOrderStagedChangeAddVariantQueryObject
    {
        $object = new ShopifyOrderStagedChangeAddVariantQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyOrderStagedChangeDecrementItem(): ShopifyOrderStagedChangeDecrementItemQueryObject
    {
        $object = new ShopifyOrderStagedChangeDecrementItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyOrderStagedChangeIncrementItem(): ShopifyOrderStagedChangeIncrementItemQueryObject
    {
        $object = new ShopifyOrderStagedChangeIncrementItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyOrderStagedChangeRemoveDiscount(): ShopifyOrderStagedChangeRemoveDiscountQueryObject
    {
        $object = new ShopifyOrderStagedChangeRemoveDiscountQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyOrderStagedChangeRemoveShippingLine(): ShopifyOrderStagedChangeRemoveShippingLineQueryObject
    {
        $object = new ShopifyOrderStagedChangeRemoveShippingLineQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
