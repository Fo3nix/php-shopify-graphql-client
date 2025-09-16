<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class DeliveryPromiseParticipantOwnerUnionObject extends UnionObject
{
    public function onProductVariant()
    {
        $object = new ProductVariantQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
