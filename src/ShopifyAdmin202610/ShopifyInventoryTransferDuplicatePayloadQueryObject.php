<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventoryTransferDuplicate` mutation.
 */
class ShopifyInventoryTransferDuplicatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryTransferDuplicatePayload";

    /**
     * The duplicated inventory transfer.
     */
    public function selectInventoryTransfer(?ShopifyInventoryTransferDuplicatePayloadInventoryTransferArgumentsObject $argsObject = null): ShopifyInventoryTransferQueryObject
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
    public function selectUserErrors(?ShopifyInventoryTransferDuplicatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventoryTransferDuplicateUserErrorQueryObject
    {
        $object = new ShopifyInventoryTransferDuplicateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
