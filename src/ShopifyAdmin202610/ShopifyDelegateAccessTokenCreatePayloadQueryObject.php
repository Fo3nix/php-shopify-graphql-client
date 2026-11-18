<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `delegateAccessTokenCreate` mutation.
 */
class ShopifyDelegateAccessTokenCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DelegateAccessTokenCreatePayload";

    /**
     * The delegate access token.
     */
    public function selectDelegateAccessToken(?ShopifyDelegateAccessTokenCreatePayloadDelegateAccessTokenArgumentsObject $argsObject = null): ShopifyDelegateAccessTokenQueryObject
    {
        $object = new ShopifyDelegateAccessTokenQueryObject("delegateAccessToken");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The user's shop.
     */
    public function selectShop(?ShopifyDelegateAccessTokenCreatePayloadShopArgumentsObject $argsObject = null): ShopifyShopQueryObject
    {
        $object = new ShopifyShopQueryObject("shop");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDelegateAccessTokenCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDelegateAccessTokenCreateUserErrorQueryObject
    {
        $object = new ShopifyDelegateAccessTokenCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
