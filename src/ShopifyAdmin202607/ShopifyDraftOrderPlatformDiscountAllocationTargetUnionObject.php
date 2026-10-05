<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

class ShopifyDraftOrderPlatformDiscountAllocationTargetUnionObject extends UnionObject
{
    public function onShopifyCalculatedDraftOrderLineItem()
    {
        $object = new ShopifyCalculatedDraftOrderLineItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDraftOrderLineItem()
    {
        $object = new ShopifyDraftOrderLineItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyShippingLine()
    {
        $object = new ShopifyShippingLineQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
