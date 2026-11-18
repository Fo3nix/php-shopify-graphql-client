<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventoryShipmentSetBarcode` mutation.
 */
class ShopifyInventoryShipmentSetBarcodePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipmentSetBarcodePayload";

    /**
     * The inventory shipment with the updated barcode.
     */
    public function selectInventoryShipment(?ShopifyInventoryShipmentSetBarcodePayloadInventoryShipmentArgumentsObject $argsObject = null): ShopifyInventoryShipmentQueryObject
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
    public function selectUserErrors(?ShopifyInventoryShipmentSetBarcodePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventoryShipmentSetBarcodeUserErrorQueryObject
    {
        $object = new ShopifyInventoryShipmentSetBarcodeUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
