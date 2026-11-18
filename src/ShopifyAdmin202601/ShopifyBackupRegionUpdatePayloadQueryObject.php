<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `backupRegionUpdate` mutation.
 */
class ShopifyBackupRegionUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "BackupRegionUpdatePayload";

    /**
     * Returns the updated backup region.
     */
    public function selectBackupRegion(?ShopifyBackupRegionUpdatePayloadBackupRegionArgumentsObject $argsObject = null): ShopifyMarketRegionInterfaceObject
    {
        $object = new ShopifyMarketRegionInterfaceObject("backupRegion");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyBackupRegionUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMarketUserErrorQueryObject
    {
        $object = new ShopifyMarketUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
