<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `transactionVoid` mutation.
 */
class ShopifyTransactionVoidPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "TransactionVoidPayload";

    /**
     * The created void transaction.
     */
    public function selectTransaction(?ShopifyTransactionVoidPayloadTransactionArgumentsObject $argsObject = null): ShopifyOrderTransactionQueryObject
    {
        $object = new ShopifyOrderTransactionQueryObject("transaction");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyTransactionVoidPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyTransactionVoidUserErrorQueryObject
    {
        $object = new ShopifyTransactionVoidUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
