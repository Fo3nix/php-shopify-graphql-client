<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `themePublish` mutation.
 */
class ShopifyThemePublishPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ThemePublishPayload";

    /**
     * The theme that was published.
     */
    public function selectTheme(?ShopifyThemePublishPayloadThemeArgumentsObject $argsObject = null): ShopifyOnlineStoreThemeQueryObject
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
    public function selectUserErrors(?ShopifyThemePublishPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyThemePublishUserErrorQueryObject
    {
        $object = new ShopifyThemePublishUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
