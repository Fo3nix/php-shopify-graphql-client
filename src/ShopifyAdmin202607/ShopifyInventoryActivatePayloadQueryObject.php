<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventoryActivate` mutation.
 */
class ShopifyInventoryActivatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryActivatePayload";

    /**
     * The inventory level that was activated.
     */
    public function selectInventoryLevel(?ShopifyInventoryActivatePayloadInventoryLevelArgumentsObject $argsObject = null): ShopifyInventoryLevelQueryObject
    {
        $object = new ShopifyInventoryLevelQueryObject("inventoryLevel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyInventoryActivatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
