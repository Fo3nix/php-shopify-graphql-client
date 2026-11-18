<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `urlRedirectBulkDeleteByIds` mutation.
 */
class ShopifyUrlRedirectBulkDeleteByIdsPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "UrlRedirectBulkDeleteByIdsPayload";

    /**
     * The asynchronous job removing the redirects.
     */
    public function selectJob(?ShopifyUrlRedirectBulkDeleteByIdsPayloadJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
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
    public function selectUserErrors(?ShopifyUrlRedirectBulkDeleteByIdsPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUrlRedirectBulkDeleteByIdsUserErrorQueryObject
    {
        $object = new ShopifyUrlRedirectBulkDeleteByIdsUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
