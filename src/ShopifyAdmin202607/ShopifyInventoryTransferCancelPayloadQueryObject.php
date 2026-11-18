<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventoryTransferCancel` mutation.
 */
class ShopifyInventoryTransferCancelPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryTransferCancelPayload";

    /**
     * The cancelled inventory transfer.
     */
    public function selectInventoryTransfer(?ShopifyInventoryTransferCancelPayloadInventoryTransferArgumentsObject $argsObject = null): ShopifyInventoryTransferQueryObject
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
    public function selectUserErrors(?ShopifyInventoryTransferCancelPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventoryTransferCancelUserErrorQueryObject
    {
        $object = new ShopifyInventoryTransferCancelUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
