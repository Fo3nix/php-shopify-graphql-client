<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

class ShopifyDeliveryRateProviderUnionObject extends UnionObject
{
    public function onShopifyDeliveryParticipant()
    {
        $object = new ShopifyDeliveryParticipantQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDeliveryRateDefinition()
    {
        $object = new ShopifyDeliveryRateDefinitionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
