<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `themeFilesUpsert` mutation.
 */
class ShopifyThemeFilesUpsertPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ThemeFilesUpsertPayload";

    /**
     * The theme files write job triggered by the mutation.
     */
    public function selectJob(?ShopifyThemeFilesUpsertPayloadJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
    {
        $object = new ShopifyJobQueryObject("job");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The resulting theme files.
     */
    public function selectUpsertedThemeFiles(?ShopifyThemeFilesUpsertPayloadUpsertedThemeFilesArgumentsObject $argsObject = null): ShopifyOnlineStoreThemeFileOperationResultQueryObject
    {
        $object = new ShopifyOnlineStoreThemeFileOperationResultQueryObject("upsertedThemeFiles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyThemeFilesUpsertPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyOnlineStoreThemeFilesUserErrorsQueryObject
    {
        $object = new ShopifyOnlineStoreThemeFilesUserErrorsQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
