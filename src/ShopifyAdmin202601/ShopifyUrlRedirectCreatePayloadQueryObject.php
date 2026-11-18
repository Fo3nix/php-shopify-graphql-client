<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `urlRedirectCreate` mutation.
 */
class ShopifyUrlRedirectCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "UrlRedirectCreatePayload";

    /**
     * The created redirect.
     */
    public function selectUrlRedirect(?ShopifyUrlRedirectCreatePayloadUrlRedirectArgumentsObject $argsObject = null): ShopifyUrlRedirectQueryObject
    {
        $object = new ShopifyUrlRedirectQueryObject("urlRedirect");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyUrlRedirectCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUrlRedirectUserErrorQueryObject
    {
        $object = new ShopifyUrlRedirectUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
