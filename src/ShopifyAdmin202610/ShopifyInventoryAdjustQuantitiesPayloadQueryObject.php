<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventoryAdjustQuantities` mutation.
 */
class ShopifyInventoryAdjustQuantitiesPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryAdjustQuantitiesPayload";

    /**
     * The group of changes made by the operation.
     */
    public function selectInventoryAdjustmentGroup(?ShopifyInventoryAdjustQuantitiesPayloadInventoryAdjustmentGroupArgumentsObject $argsObject = null): ShopifyInventoryAdjustmentGroupQueryObject
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
    public function selectUserErrors(?ShopifyInventoryAdjustQuantitiesPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventoryAdjustQuantitiesUserErrorQueryObject
    {
        $object = new ShopifyInventoryAdjustQuantitiesUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
