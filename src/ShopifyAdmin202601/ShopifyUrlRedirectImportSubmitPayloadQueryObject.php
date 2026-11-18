<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `urlRedirectImportSubmit` mutation.
 */
class ShopifyUrlRedirectImportSubmitPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "UrlRedirectImportSubmitPayload";

    /**
     * The asynchronous job importing the redirects.
     */
    public function selectJob(?ShopifyUrlRedirectImportSubmitPayloadJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
    {
        $object = new ShopifyJobQueryObject("job");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyUrlRedirectImportSubmitPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUrlRedirectImportUserErrorQueryObject
    {
        $object = new ShopifyUrlRedirectImportUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
