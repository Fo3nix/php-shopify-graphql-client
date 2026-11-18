<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `previewInstall` mutation.
 */
class ShopifyPreviewInstallPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PreviewInstallPayload";

    /**
     * The installed theme.
     */
    public function selectNewTheme(?ShopifyPreviewInstallPayloadNewThemeArgumentsObject $argsObject = null): ShopifyOnlineStoreThemeQueryObject
    {
        $object = new ShopifyOnlineStoreThemeQueryObject("newTheme");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyPreviewInstallPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPreviewInstallUserErrorQueryObject
    {
        $object = new ShopifyPreviewInstallUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
