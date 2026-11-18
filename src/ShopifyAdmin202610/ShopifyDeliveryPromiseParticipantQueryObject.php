<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Returns enabled delivery promise participants.
 */
class ShopifyDeliveryPromiseParticipantQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryPromiseParticipant";

    /**
     * The ID of the promise participant.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The resource that the participant is attached to.
     */
    public function selectOwner(?ShopifyDeliveryPromiseParticipantOwnerArgumentsObject $argsObject = null): ShopifyDeliveryPromiseParticipantOwnerUnionObject
    {
        $object = new ShopifyDeliveryPromiseParticipantOwnerUnionObject("owner");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The owner type of the participant.
     */
    public function selectOwnerType(): static
    {
        $this->selectField("ownerType");

        return $this;
    }
}
