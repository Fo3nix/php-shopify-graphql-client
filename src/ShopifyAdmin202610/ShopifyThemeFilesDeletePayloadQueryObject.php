<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `themeFilesDelete` mutation.
 */
class ShopifyThemeFilesDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ThemeFilesDeletePayload";

    /**
     * The resulting theme files.
     */
    public function selectDeletedThemeFiles(?ShopifyThemeFilesDeletePayloadDeletedThemeFilesArgumentsObject $argsObject = null): ShopifyOnlineStoreThemeFileOperationResultQueryObject
    {
        $object = new ShopifyOnlineStoreThemeFileOperationResultQueryObject("deletedThemeFiles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyThemeFilesDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyOnlineStoreThemeFilesUserErrorsQueryObject
    {
        $object = new ShopifyOnlineStoreThemeFilesUserErrorsQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
