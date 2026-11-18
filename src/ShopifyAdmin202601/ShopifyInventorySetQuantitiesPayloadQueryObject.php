<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventorySetQuantities` mutation.
 */
class ShopifyInventorySetQuantitiesPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventorySetQuantitiesPayload";

    /**
     * The group of changes made by the operation.
     */
    public function selectInventoryAdjustmentGroup(?ShopifyInventorySetQuantitiesPayloadInventoryAdjustmentGroupArgumentsObject $argsObject = null): ShopifyInventoryAdjustmentGroupQueryObject
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
    public function selectUserErrors(?ShopifyInventorySetQuantitiesPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventorySetQuantitiesUserErrorQueryObject
    {
        $object = new ShopifyInventorySetQuantitiesUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
