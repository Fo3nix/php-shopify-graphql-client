<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventoryItemUpdate` mutation.
 */
class ShopifyInventoryItemUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryItemUpdatePayload";

    /**
     * The inventory item that was updated.
     */
    public function selectInventoryItem(?ShopifyInventoryItemUpdatePayloadInventoryItemArgumentsObject $argsObject = null): ShopifyInventoryItemQueryObject
    {
        $object = new ShopifyInventoryItemQueryObject("inventoryItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyInventoryItemUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
