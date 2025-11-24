<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\UnionObject;

class ShopifyReverseDeliveryDeliverableUnionObject extends UnionObject
{
    public function onShopifyReverseDeliveryShippingDeliverable()
    {
        $object = new ShopifyReverseDeliveryShippingDeliverableQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
