<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventoryShipmentUpdateItemQuantities` mutation.
 */
class ShopifyInventoryShipmentUpdateItemQuantitiesPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipmentUpdateItemQuantitiesPayload";

    /**
     * The inventory shipment with updated item quantities.
     */
    public function selectShipment(?ShopifyInventoryShipmentUpdateItemQuantitiesPayloadShipmentArgumentsObject $argsObject = null): ShopifyInventoryShipmentQueryObject
    {
        $object = new ShopifyInventoryShipmentQueryObject("shipment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The updated item quantities.
     */
    public function selectUpdatedLineItems(?ShopifyInventoryShipmentUpdateItemQuantitiesPayloadUpdatedLineItemsArgumentsObject $argsObject = null): ShopifyInventoryShipmentLineItemQueryObject
    {
        $object = new ShopifyInventoryShipmentLineItemQueryObject("updatedLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyInventoryShipmentUpdateItemQuantitiesPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventoryShipmentUpdateItemQuantitiesUserErrorQueryObject
    {
        $object = new ShopifyInventoryShipmentUpdateItemQuantitiesUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
