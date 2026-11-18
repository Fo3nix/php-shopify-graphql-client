<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `themeFilesCopy` mutation.
 */
class ShopifyThemeFilesCopyPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ThemeFilesCopyPayload";

    /**
     * The resulting theme files.
     */
    public function selectCopiedThemeFiles(?ShopifyThemeFilesCopyPayloadCopiedThemeFilesArgumentsObject $argsObject = null): ShopifyOnlineStoreThemeFileOperationResultQueryObject
    {
        $object = new ShopifyOnlineStoreThemeFileOperationResultQueryObject("copiedThemeFiles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyThemeFilesCopyPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyOnlineStoreThemeFilesUserErrorsQueryObject
    {
        $object = new ShopifyOnlineStoreThemeFilesUserErrorsQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
