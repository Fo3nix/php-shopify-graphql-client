<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventoryTransferCreate` mutation.
 */
class ShopifyInventoryTransferCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryTransferCreatePayload";

    /**
     * The created inventory transfer.
     */
    public function selectInventoryTransfer(?ShopifyInventoryTransferCreatePayloadInventoryTransferArgumentsObject $argsObject = null): ShopifyInventoryTransferQueryObject
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
    public function selectUserErrors(?ShopifyInventoryTransferCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventoryTransferCreateUserErrorQueryObject
    {
        $object = new ShopifyInventoryTransferCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
