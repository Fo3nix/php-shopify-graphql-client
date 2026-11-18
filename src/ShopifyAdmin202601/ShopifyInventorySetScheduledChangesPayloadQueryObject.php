<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `inventorySetScheduledChanges` mutation.
 */
class ShopifyInventorySetScheduledChangesPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventorySetScheduledChangesPayload";

    /**
     * The scheduled changes that were created.
     */
    public function selectScheduledChanges(?ShopifyInventorySetScheduledChangesPayloadScheduledChangesArgumentsObject $argsObject = null): ShopifyInventoryScheduledChangeQueryObject
    {
        $object = new ShopifyInventoryScheduledChangeQueryObject("scheduledChanges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyInventorySetScheduledChangesPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyInventorySetScheduledChangesUserErrorQueryObject
    {
        $object = new ShopifyInventorySetScheduledChangesUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
