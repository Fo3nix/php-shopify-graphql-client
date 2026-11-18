<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventoryTransferMarkAsReadyToShip` mutation.
 */
class ShopifyInventoryTransferMarkAsReadyToShipPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryTransferMarkAsReadyToShipPayload";

    /**
     * The ready to ship inventory transfer.
     */
    public function selectInventoryTransfer(?ShopifyInventoryTransferMarkAsReadyToShipPayloadInventoryTransferArgumentsObject $argsObject = null): ShopifyInventoryTransferQueryObject
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
    public function selectUserErrors(?ShopifyInventoryTransferMarkAsReadyToShipPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventoryTransferMarkAsReadyToShipUserErrorQueryObject
    {
        $object = new ShopifyInventoryTransferMarkAsReadyToShipUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
