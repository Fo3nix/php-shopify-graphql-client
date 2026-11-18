<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `urlRedirectBulkDeleteBySavedSearch` mutation.
 */
class ShopifyUrlRedirectBulkDeleteBySavedSearchPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "UrlRedirectBulkDeleteBySavedSearchPayload";

    /**
     * The asynchronous job removing the redirects.
     */
    public function selectJob(?ShopifyUrlRedirectBulkDeleteBySavedSearchPayloadJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
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
    public function selectUserErrors(?ShopifyUrlRedirectBulkDeleteBySavedSearchPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUrlRedirectBulkDeleteBySavedSearchUserErrorQueryObject
    {
        $object = new ShopifyUrlRedirectBulkDeleteBySavedSearchUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
