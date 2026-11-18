<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `deliveryProfileUpdate` mutation.
 */
class ShopifyDeliveryProfileUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryProfileUpdatePayload";

    /**
     * The delivery profile that was updated.
     */
    public function selectProfile(?ShopifyDeliveryProfileUpdatePayloadProfileArgumentsObject $argsObject = null): ShopifyDeliveryProfileQueryObject
    {
        $object = new ShopifyDeliveryProfileQueryObject("profile");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDeliveryProfileUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
