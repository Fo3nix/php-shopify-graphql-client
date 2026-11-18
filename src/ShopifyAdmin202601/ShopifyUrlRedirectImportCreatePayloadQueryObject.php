<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `urlRedirectImportCreate` mutation.
 */
class ShopifyUrlRedirectImportCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "UrlRedirectImportCreatePayload";

    /**
     * The created `URLRedirectImport` object.
     */
    public function selectUrlRedirectImport(?ShopifyUrlRedirectImportCreatePayloadUrlRedirectImportArgumentsObject $argsObject = null): ShopifyUrlRedirectImportQueryObject
    {
        $object = new ShopifyUrlRedirectImportQueryObject("urlRedirectImport");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyUrlRedirectImportCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUrlRedirectImportUserErrorQueryObject
    {
        $object = new ShopifyUrlRedirectImportUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
