<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `shopLocaleEnable` mutation.
 */
class ShopifyShopLocaleEnablePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopLocaleEnablePayload";

    /**
     * ISO code of the locale that was enabled.
     */
    public function selectShopLocale(?ShopifyShopLocaleEnablePayloadShopLocaleArgumentsObject $argsObject = null): ShopifyShopLocaleQueryObject
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
    public function selectUserErrors(?ShopifyShopLocaleEnablePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
