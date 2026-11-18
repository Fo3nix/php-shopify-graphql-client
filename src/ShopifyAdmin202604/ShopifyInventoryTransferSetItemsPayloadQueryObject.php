<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventoryTransferSetItems` mutation.
 */
class ShopifyInventoryTransferSetItemsPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryTransferSetItemsPayload";

    /**
     * The Transfer with its line items updated.
     */
    public function selectInventoryTransfer(?ShopifyInventoryTransferSetItemsPayloadInventoryTransferArgumentsObject $argsObject = null): ShopifyInventoryTransferQueryObject
    {
        $object = new ShopifyInventoryTransferQueryObject("inventoryTransfer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The updated line items.
     */
    public function selectUpdatedLineItems(?ShopifyInventoryTransferSetItemsPayloadUpdatedLineItemsArgumentsObject $argsObject = null): ShopifyInventoryTransferLineItemUpdateQueryObject
    {
        $object = new ShopifyInventoryTransferLineItemUpdateQueryObject("updatedLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyInventoryTransferSetItemsPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventoryTransferSetItemsUserErrorQueryObject
    {
        $object = new ShopifyInventoryTransferSetItemsUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
