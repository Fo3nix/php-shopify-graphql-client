<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventoryShipmentRemoveItems` mutation.
 */
class ShopifyInventoryShipmentRemoveItemsPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipmentRemoveItemsPayload";

    /**
     * The inventory shipment with items removed.
     */
    public function selectInventoryShipment(?ShopifyInventoryShipmentRemoveItemsPayloadInventoryShipmentArgumentsObject $argsObject = null): ShopifyInventoryShipmentQueryObject
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
    public function selectUserErrors(?ShopifyInventoryShipmentRemoveItemsPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventoryShipmentRemoveItemsUserErrorQueryObject
    {
        $object = new ShopifyInventoryShipmentRemoveItemsUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
