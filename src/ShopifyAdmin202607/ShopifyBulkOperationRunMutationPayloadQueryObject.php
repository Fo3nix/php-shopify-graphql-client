<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `bulkOperationRunMutation` mutation.
 */
class ShopifyBulkOperationRunMutationPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "BulkOperationRunMutationPayload";

    /**
     * The newly created bulk operation.
     */
    public function selectBulkOperation(?ShopifyBulkOperationRunMutationPayloadBulkOperationArgumentsObject $argsObject = null): ShopifyBulkOperationQueryObject
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
    public function selectUserErrors(?ShopifyBulkOperationRunMutationPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBulkMutationUserErrorQueryObject
    {
        $object = new ShopifyBulkMutationUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
