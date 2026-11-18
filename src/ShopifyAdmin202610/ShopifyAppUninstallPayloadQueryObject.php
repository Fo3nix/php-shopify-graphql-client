<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `appUninstall` mutation.
 */
class ShopifyAppUninstallPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppUninstallPayload";

    /**
     * The uninstalled app.
     */
    public function selectApp(?ShopifyAppUninstallPayloadAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyAppUninstallPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyAppUninstallAppUninstallErrorQueryObject
    {
        $object = new ShopifyAppUninstallAppUninstallErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
