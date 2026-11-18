<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `themeDelete` mutation.
 */
class ShopifyThemeDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ThemeDeletePayload";

    /**
     * The ID of the deleted theme.
     */
    public function selectDeletedThemeId(): static
    {
        $this->selectField("deletedThemeId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyThemeDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyThemeDeleteUserErrorQueryObject
    {
        $object = new ShopifyThemeDeleteUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
