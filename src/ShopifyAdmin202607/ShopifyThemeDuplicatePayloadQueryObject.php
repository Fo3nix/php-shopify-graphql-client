<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `themeDuplicate` mutation.
 */
class ShopifyThemeDuplicatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ThemeDuplicatePayload";

    /**
     * The newly duplicated theme.
     */
    public function selectNewTheme(?ShopifyThemeDuplicatePayloadNewThemeArgumentsObject $argsObject = null): ShopifyOnlineStoreThemeQueryObject
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
    public function selectUserErrors(?ShopifyThemeDuplicatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyThemeDuplicateUserErrorQueryObject
    {
        $object = new ShopifyThemeDuplicateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
