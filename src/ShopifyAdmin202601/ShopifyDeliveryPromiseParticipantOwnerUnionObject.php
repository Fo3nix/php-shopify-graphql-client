<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\UnionObject;

/**
 * The object that the participant references.
 */
class ShopifyDeliveryPromiseParticipantOwnerUnionObject extends UnionObject
{
    public function onShopifyProductVariant(): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
