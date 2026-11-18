<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventoryShipmentSetTracking` mutation.
 */
class ShopifyInventoryShipmentSetTrackingPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipmentSetTrackingPayload";

    /**
     * The inventory shipment with the edited tracking info.
     */
    public function selectInventoryShipment(?ShopifyInventoryShipmentSetTrackingPayloadInventoryShipmentArgumentsObject $argsObject = null): ShopifyInventoryShipmentQueryObject
    {
        $object = new ShopifyInventoryShipmentQueryObject("inventoryShipment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyInventoryShipmentSetTrackingPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventoryShipmentSetTrackingUserErrorQueryObject
    {
        $object = new ShopifyInventoryShipmentSetTrackingUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
