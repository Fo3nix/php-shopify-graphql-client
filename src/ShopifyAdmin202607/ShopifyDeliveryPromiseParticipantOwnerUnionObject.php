<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

class ShopifyDeliveryPromiseParticipantOwnerUnionObject extends UnionObject
{
    public function onShopifyProductVariant()
    {
        $object = new ShopifyProductVariantQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
