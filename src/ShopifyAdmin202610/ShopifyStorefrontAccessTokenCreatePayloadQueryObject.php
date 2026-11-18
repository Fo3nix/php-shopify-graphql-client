<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `storefrontAccessTokenCreate` mutation.
 */
class ShopifyStorefrontAccessTokenCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "StorefrontAccessTokenCreatePayload";

    /**
     * The user's shop.
     */
    public function selectShop(?ShopifyStorefrontAccessTokenCreatePayloadShopArgumentsObject $argsObject = null): ShopifyShopQueryObject
    {
        $object = new ShopifyShopQueryObject("shop");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The storefront access token.
     */
    public function selectStorefrontAccessToken(?ShopifyStorefrontAccessTokenCreatePayloadStorefrontAccessTokenArgumentsObject $argsObject = null): ShopifyStorefrontAccessTokenQueryObject
    {
        $object = new ShopifyStorefrontAccessTokenQueryObject("storefrontAccessToken");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyStorefrontAccessTokenCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
