<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventorySetOnHandQuantities` mutation.
 */
class ShopifyInventorySetOnHandQuantitiesPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventorySetOnHandQuantitiesPayload";

    /**
     * The group of changes made by the operation.
     */
    public function selectInventoryAdjustmentGroup(?ShopifyInventorySetOnHandQuantitiesPayloadInventoryAdjustmentGroupArgumentsObject $argsObject = null): ShopifyInventoryAdjustmentGroupQueryObject
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
    public function selectUserErrors(?ShopifyInventorySetOnHandQuantitiesPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventorySetOnHandQuantitiesUserErrorQueryObject
    {
        $object = new ShopifyInventorySetOnHandQuantitiesUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
