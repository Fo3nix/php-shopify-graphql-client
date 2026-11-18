<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `bulkOperationCancel` mutation.
 */
class ShopifyBulkOperationCancelPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "BulkOperationCancelPayload";

    /**
     * The bulk operation to be canceled.
     */
    public function selectBulkOperation(?ShopifyBulkOperationCancelPayloadBulkOperationArgumentsObject $argsObject = null): ShopifyBulkOperationQueryObject
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
    public function selectUserErrors(?ShopifyBulkOperationCancelPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
