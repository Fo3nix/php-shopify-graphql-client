<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventoryShipmentCreateInTransit` mutation.
 */
class ShopifyInventoryShipmentCreateInTransitPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipmentCreateInTransitPayload";

    /**
     * The created inventory shipment.
     */
    public function selectInventoryShipment(?ShopifyInventoryShipmentCreateInTransitPayloadInventoryShipmentArgumentsObject $argsObject = null): ShopifyInventoryShipmentQueryObject
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
    public function selectUserErrors(?ShopifyInventoryShipmentCreateInTransitPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventoryShipmentCreateInTransitUserErrorQueryObject
    {
        $object = new ShopifyInventoryShipmentCreateInTransitUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
