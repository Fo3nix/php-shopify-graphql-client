<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `metaobjectBulkDelete` mutation.
 */
class ShopifyMetaobjectBulkDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectBulkDeletePayload";

    /**
     * The asynchronous job that deletes the metaobjects.
     */
    public function selectJob(?ShopifyMetaobjectBulkDeletePayloadJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
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
    public function selectUserErrors(?ShopifyMetaobjectBulkDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMetaobjectUserErrorQueryObject
    {
        $object = new ShopifyMetaobjectUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
