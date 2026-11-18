<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `storeCreditAccountDebit` mutation.
 */
class ShopifyStoreCreditAccountDebitPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "StoreCreditAccountDebitPayload";

    /**
     * The store credit account transaction that was created.
     */
    public function selectStoreCreditAccountTransaction(?ShopifyStoreCreditAccountDebitPayloadStoreCreditAccountTransactionArgumentsObject $argsObject = null): ShopifyStoreCreditAccountDebitTransactionQueryObject
    {
        $object = new ShopifyStoreCreditAccountDebitTransactionQueryObject("storeCreditAccountTransaction");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyStoreCreditAccountDebitPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyStoreCreditAccountDebitUserErrorQueryObject
    {
        $object = new ShopifyStoreCreditAccountDebitUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
