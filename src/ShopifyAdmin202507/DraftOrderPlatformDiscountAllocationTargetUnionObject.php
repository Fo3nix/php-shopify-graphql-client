<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class DraftOrderPlatformDiscountAllocationTargetUnionObject extends UnionObject
{
    public function onCalculatedDraftOrderLineItem()
    {
        $object = new CalculatedDraftOrderLineItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDraftOrderLineItem()
    {
        $object = new DraftOrderLineItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShippingLine()
    {
        $object = new ShippingLineQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
