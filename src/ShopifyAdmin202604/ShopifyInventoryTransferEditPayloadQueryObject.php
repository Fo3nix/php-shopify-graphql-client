<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventoryTransferEdit` mutation.
 */
class ShopifyInventoryTransferEditPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryTransferEditPayload";

    /**
     * The edited inventory transfer.
     */
    public function selectInventoryTransfer(?ShopifyInventoryTransferEditPayloadInventoryTransferArgumentsObject $argsObject = null): ShopifyInventoryTransferQueryObject
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
    public function selectUserErrors(?ShopifyInventoryTransferEditPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventoryTransferEditUserErrorQueryObject
    {
        $object = new ShopifyInventoryTransferEditUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
