<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `themeUpdate` mutation.
 */
class ShopifyThemeUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ThemeUpdatePayload";

    /**
     * The theme that was updated.
     */
    public function selectTheme(?ShopifyThemeUpdatePayloadThemeArgumentsObject $argsObject = null): ShopifyOnlineStoreThemeQueryObject
    {
        $object = new ShopifyOnlineStoreThemeQueryObject("theme");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyThemeUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyThemeUpdateUserErrorQueryObject
    {
        $object = new ShopifyThemeUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
