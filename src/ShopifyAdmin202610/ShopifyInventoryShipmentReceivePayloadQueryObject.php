<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventoryShipmentReceive` mutation.
 */
class ShopifyInventoryShipmentReceivePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipmentReceivePayload";

    /**
     * The inventory shipment with received items.
     */
    public function selectInventoryShipment(?ShopifyInventoryShipmentReceivePayloadInventoryShipmentArgumentsObject $argsObject = null): ShopifyInventoryShipmentQueryObject
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
    public function selectUserErrors(?ShopifyInventoryShipmentReceivePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventoryShipmentReceiveUserErrorQueryObject
    {
        $object = new ShopifyInventoryShipmentReceiveUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
