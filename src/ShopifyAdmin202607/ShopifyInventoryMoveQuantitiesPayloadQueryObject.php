<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventoryMoveQuantities` mutation.
 */
class ShopifyInventoryMoveQuantitiesPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryMoveQuantitiesPayload";

    /**
     * The group of changes made by the operation.
     */
    public function selectInventoryAdjustmentGroup(?ShopifyInventoryMoveQuantitiesPayloadInventoryAdjustmentGroupArgumentsObject $argsObject = null): ShopifyInventoryAdjustmentGroupQueryObject
    {
        $object = new ShopifyInventoryAdjustmentGroupQueryObject("inventoryAdjustmentGroup");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyInventoryMoveQuantitiesPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventoryMoveQuantitiesUserErrorQueryObject
    {
        $object = new ShopifyInventoryMoveQuantitiesUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
