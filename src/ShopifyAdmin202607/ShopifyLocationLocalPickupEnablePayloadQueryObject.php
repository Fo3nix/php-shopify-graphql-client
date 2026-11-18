<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `locationLocalPickupEnable` mutation.
 */
class ShopifyLocationLocalPickupEnablePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocationLocalPickupEnablePayload";

    /**
     * The local pickup settings that were enabled.
     */
    public function selectLocalPickupSettings(?ShopifyLocationLocalPickupEnablePayloadLocalPickupSettingsArgumentsObject $argsObject = null): ShopifyDeliveryLocalPickupSettingsQueryObject
    {
        $object = new ShopifyDeliveryLocalPickupSettingsQueryObject("localPickupSettings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyLocationLocalPickupEnablePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDeliveryLocationLocalPickupSettingsErrorQueryObject
    {
        $object = new ShopifyDeliveryLocationLocalPickupSettingsErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
