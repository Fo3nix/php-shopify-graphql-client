<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventoryShipmentCreate` mutation.
 */
class ShopifyInventoryShipmentCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipmentCreatePayload";

    /**
     * The created inventory shipment.
     */
    public function selectInventoryShipment(?ShopifyInventoryShipmentCreatePayloadInventoryShipmentArgumentsObject $argsObject = null): ShopifyInventoryShipmentQueryObject
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
    public function selectUserErrors(?ShopifyInventoryShipmentCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventoryShipmentCreateUserErrorQueryObject
    {
        $object = new ShopifyInventoryShipmentCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
