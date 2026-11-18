<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `urlRedirectBulkDeleteBySearch` mutation.
 */
class ShopifyUrlRedirectBulkDeleteBySearchPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "UrlRedirectBulkDeleteBySearchPayload";

    /**
     * The asynchronous job removing the redirects.
     */
    public function selectJob(?ShopifyUrlRedirectBulkDeleteBySearchPayloadJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
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
    public function selectUserErrors(?ShopifyUrlRedirectBulkDeleteBySearchPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUrlRedirectBulkDeleteBySearchUserErrorQueryObject
    {
        $object = new ShopifyUrlRedirectBulkDeleteBySearchUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
