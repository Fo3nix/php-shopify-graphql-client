<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

/**
 * The delivery method and artifacts associated with a reverse delivery.
 */
class ShopifyReverseDeliveryDeliverableUnionObject extends UnionObject
{
    public function onShopifyReverseDeliveryShippingDeliverable(): ShopifyReverseDeliveryShippingDeliverableQueryObject
    {
        $object = new ShopifyReverseDeliveryShippingDeliverableQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
