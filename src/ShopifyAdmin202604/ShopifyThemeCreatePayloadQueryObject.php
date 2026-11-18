<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `themeCreate` mutation.
 */
class ShopifyThemeCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ThemeCreatePayload";

    /**
     * The theme that was created.
     */
    public function selectTheme(?ShopifyThemeCreatePayloadThemeArgumentsObject $argsObject = null): ShopifyOnlineStoreThemeQueryObject
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
    public function selectUserErrors(?ShopifyThemeCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyThemeCreateUserErrorQueryObject
    {
        $object = new ShopifyThemeCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
