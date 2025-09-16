<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class ReverseDeliveryDeliverableUnionObject extends UnionObject
{
    public function onReverseDeliveryShippingDeliverable()
    {
        $object = new ReverseDeliveryShippingDeliverableQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
