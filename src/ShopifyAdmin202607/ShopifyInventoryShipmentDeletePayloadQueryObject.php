<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventoryShipmentDelete` mutation.
 */
class ShopifyInventoryShipmentDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipmentDeletePayload";

    /**
     * The ID of the inventory shipment that was deleted.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyInventoryShipmentDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventoryShipmentDeleteUserErrorQueryObject
    {
        $object = new ShopifyInventoryShipmentDeleteUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
