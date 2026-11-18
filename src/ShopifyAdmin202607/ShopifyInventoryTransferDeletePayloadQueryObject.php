<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventoryTransferDelete` mutation.
 */
class ShopifyInventoryTransferDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryTransferDeletePayload";

    /**
     * The ID of the deleted inventory transfer.
     */
    public function selectDeletedId(): static
    {
        $this->selectField("deletedId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyInventoryTransferDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventoryTransferDeleteUserErrorQueryObject
    {
        $object = new ShopifyInventoryTransferDeleteUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
