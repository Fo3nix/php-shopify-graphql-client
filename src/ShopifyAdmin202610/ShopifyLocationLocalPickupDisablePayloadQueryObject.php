<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `locationLocalPickupDisable` mutation.
 */
class ShopifyLocationLocalPickupDisablePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocationLocalPickupDisablePayload";

    /**
     * The ID of the location for which local pickup was disabled.
     */
    public function selectLocationId(): static
    {
        $this->selectField("locationId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyLocationLocalPickupDisablePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDeliveryLocationLocalPickupSettingsErrorQueryObject
    {
        $object = new ShopifyDeliveryLocationLocalPickupSettingsErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
