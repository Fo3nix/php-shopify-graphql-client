<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\UnionObject;

/**
 * A rate provided by a merchant-defined rate or a participant.
 */
class ShopifyDeliveryRateProviderUnionObject extends UnionObject
{
    public function onShopifyDeliveryParticipant(): ShopifyDeliveryParticipantQueryObject
    {
        $object = new ShopifyDeliveryParticipantQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDeliveryRateDefinition(): ShopifyDeliveryRateDefinitionQueryObject
    {
        $object = new ShopifyDeliveryRateDefinitionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
