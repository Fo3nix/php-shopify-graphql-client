<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventoryTransferRemoveItems` mutation.
 */
class ShopifyInventoryTransferRemoveItemsPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryTransferRemoveItemsPayload";

    /**
     * The transfer with line items removed.
     */
    public function selectInventoryTransfer(?ShopifyInventoryTransferRemoveItemsPayloadInventoryTransferArgumentsObject $argsObject = null): ShopifyInventoryTransferQueryObject
    {
        $object = new ShopifyInventoryTransferQueryObject("inventoryTransfer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The line items that have had their shippable quantity removed.
     */
    public function selectRemovedQuantities(?ShopifyInventoryTransferRemoveItemsPayloadRemovedQuantitiesArgumentsObject $argsObject = null): ShopifyInventoryTransferLineItemUpdateQueryObject
    {
        $object = new ShopifyInventoryTransferLineItemUpdateQueryObject("removedQuantities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyInventoryTransferRemoveItemsPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventoryTransferRemoveItemsUserErrorQueryObject
    {
        $object = new ShopifyInventoryTransferRemoveItemsUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
