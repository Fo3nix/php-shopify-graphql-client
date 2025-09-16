<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class DeliveryRateProviderUnionObject extends UnionObject
{
    public function onDeliveryParticipant()
    {
        $object = new DeliveryParticipantQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryRateDefinition()
    {
        $object = new DeliveryRateDefinitionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
