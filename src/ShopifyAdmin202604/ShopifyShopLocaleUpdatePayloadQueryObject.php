<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `shopLocaleUpdate` mutation.
 */
class ShopifyShopLocaleUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopLocaleUpdatePayload";

    /**
     * The locale that was updated.
     */
    public function selectShopLocale(?ShopifyShopLocaleUpdatePayloadShopLocaleArgumentsObject $argsObject = null): ShopifyShopLocaleQueryObject
    {
        $object = new ShopifyShopLocaleQueryObject("shopLocale");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyShopLocaleUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
