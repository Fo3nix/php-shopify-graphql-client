<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `delegateAccessTokenDestroy` mutation.
 */
class ShopifyDelegateAccessTokenDestroyPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DelegateAccessTokenDestroyPayload";

    /**
     * The user's shop.
     */
    public function selectShop(?ShopifyDelegateAccessTokenDestroyPayloadShopArgumentsObject $argsObject = null): ShopifyShopQueryObject
    {
        $object = new ShopifyShopQueryObject("shop");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The status of the delegate access token destroy operation. Returns true if successful.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDelegateAccessTokenDestroyPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyDelegateAccessTokenDestroyUserErrorQueryObject
    {
        $object = new ShopifyDelegateAccessTokenDestroyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
