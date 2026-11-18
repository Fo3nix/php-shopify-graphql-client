<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventoryShipmentMarkInTransit` mutation.
 */
class ShopifyInventoryShipmentMarkInTransitPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipmentMarkInTransitPayload";

    /**
     * The marked in transit inventory shipment.
     */
    public function selectInventoryShipment(?ShopifyInventoryShipmentMarkInTransitPayloadInventoryShipmentArgumentsObject $argsObject = null): ShopifyInventoryShipmentQueryObject
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
    public function selectUserErrors(?ShopifyInventoryShipmentMarkInTransitPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventoryShipmentMarkInTransitUserErrorQueryObject
    {
        $object = new ShopifyInventoryShipmentMarkInTransitUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
