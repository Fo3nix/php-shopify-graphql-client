<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventoryBulkToggleActivation` mutation.
 */
class ShopifyInventoryBulkToggleActivationPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryBulkToggleActivationPayload";

    /**
     * The inventory item that was updated.
     */
    public function selectInventoryItem(?ShopifyInventoryBulkToggleActivationPayloadInventoryItemArgumentsObject $argsObject = null): ShopifyInventoryItemQueryObject
    {
        $object = new ShopifyInventoryItemQueryObject("inventoryItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The activated inventory levels.
     */
    public function selectInventoryLevels(?ShopifyInventoryBulkToggleActivationPayloadInventoryLevelsArgumentsObject $argsObject = null): ShopifyInventoryLevelQueryObject
    {
        $object = new ShopifyInventoryLevelQueryObject("inventoryLevels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyInventoryBulkToggleActivationPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventoryBulkToggleActivationUserErrorQueryObject
    {
        $object = new ShopifyInventoryBulkToggleActivationUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
