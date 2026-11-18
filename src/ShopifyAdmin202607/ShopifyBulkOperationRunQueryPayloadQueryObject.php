<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `bulkOperationRunQuery` mutation.
 */
class ShopifyBulkOperationRunQueryPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "BulkOperationRunQueryPayload";

    /**
     * The newly created bulk operation.
     */
    public function selectBulkOperation(?ShopifyBulkOperationRunQueryPayloadBulkOperationArgumentsObject $argsObject = null): ShopifyBulkOperationQueryObject
    {
        $object = new ShopifyBulkOperationQueryObject("bulkOperation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyBulkOperationRunQueryPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBulkOperationUserErrorQueryObject
    {
        $object = new ShopifyBulkOperationUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
