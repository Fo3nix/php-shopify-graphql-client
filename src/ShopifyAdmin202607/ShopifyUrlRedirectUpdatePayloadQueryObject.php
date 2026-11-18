<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `urlRedirectUpdate` mutation.
 */
class ShopifyUrlRedirectUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "UrlRedirectUpdatePayload";

    /**
     * Returns the updated URL redirect.
     */
    public function selectUrlRedirect(?ShopifyUrlRedirectUpdatePayloadUrlRedirectArgumentsObject $argsObject = null): ShopifyUrlRedirectQueryObject
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
    public function selectUserErrors(?ShopifyUrlRedirectUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUrlRedirectUserErrorQueryObject
    {
        $object = new ShopifyUrlRedirectUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
