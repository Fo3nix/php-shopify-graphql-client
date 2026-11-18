<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventoryTransferCreateAsReadyToShip` mutation.
 */
class ShopifyInventoryTransferCreateAsReadyToShipPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryTransferCreateAsReadyToShipPayload";

    /**
     * The created inventory transfer.
     */
    public function selectInventoryTransfer(?ShopifyInventoryTransferCreateAsReadyToShipPayloadInventoryTransferArgumentsObject $argsObject = null): ShopifyInventoryTransferQueryObject
    {
        $object = new ShopifyInventoryTransferQueryObject("inventoryTransfer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyInventoryTransferCreateAsReadyToShipPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventoryTransferCreateAsReadyToShipUserErrorQueryObject
    {
        $object = new ShopifyInventoryTransferCreateAsReadyToShipUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
