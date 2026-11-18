<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\UnionObject;

/**
 * The element of the draft being discounted.
 */
class ShopifyDraftOrderPlatformDiscountAllocationTargetUnionObject extends UnionObject
{
    public function onShopifyCalculatedDraftOrderLineItem(): ShopifyCalculatedDraftOrderLineItemQueryObject
    {
        $object = new ShopifyCalculatedDraftOrderLineItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDraftOrderLineItem(): ShopifyDraftOrderLineItemQueryObject
    {
        $object = new ShopifyDraftOrderLineItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyShippingLine(): ShopifyShippingLineQueryObject
    {
        $object = new ShopifyShippingLineQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
