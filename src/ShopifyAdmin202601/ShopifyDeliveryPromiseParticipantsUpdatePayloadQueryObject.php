<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `deliveryPromiseParticipantsUpdate` mutation.
 */
class ShopifyDeliveryPromiseParticipantsUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryPromiseParticipantsUpdatePayload";

    /**
     * The promise participants that were added.
     */
    public function selectPromiseParticipants(?ShopifyDeliveryPromiseParticipantsUpdatePayloadPromiseParticipantsArgumentsObject $argsObject = null): ShopifyDeliveryPromiseParticipantQueryObject
    {
        $object = new ShopifyDeliveryPromiseParticipantQueryObject("promiseParticipants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDeliveryPromiseParticipantsUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
