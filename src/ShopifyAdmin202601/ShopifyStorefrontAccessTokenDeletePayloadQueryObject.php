<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `storefrontAccessTokenDelete` mutation.
 */
class ShopifyStorefrontAccessTokenDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "StorefrontAccessTokenDeletePayload";

    /**
     * The ID of the deleted storefront access token.
     */
    public function selectDeletedStorefrontAccessTokenId(): static
    {
        $this->selectField("deletedStorefrontAccessTokenId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyStorefrontAccessTokenDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
