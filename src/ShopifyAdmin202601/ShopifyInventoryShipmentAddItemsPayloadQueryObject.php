<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventoryShipmentAddItems` mutation.
 */
class ShopifyInventoryShipmentAddItemsPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipmentAddItemsPayload";

    /**
     * The list of added line items.
     */
    public function selectAddedItems(?ShopifyInventoryShipmentAddItemsPayloadAddedItemsArgumentsObject $argsObject = null): ShopifyInventoryShipmentLineItemQueryObject
    {
        $object = new ShopifyInventoryShipmentLineItemQueryObject("addedItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The inventory shipment with the added items.
     */
    public function selectInventoryShipment(?ShopifyInventoryShipmentAddItemsPayloadInventoryShipmentArgumentsObject $argsObject = null): ShopifyInventoryShipmentQueryObject
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
    public function selectUserErrors(?ShopifyInventoryShipmentAddItemsPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventoryShipmentAddItemsUserErrorQueryObject
    {
        $object = new ShopifyInventoryShipmentAddItemsUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
