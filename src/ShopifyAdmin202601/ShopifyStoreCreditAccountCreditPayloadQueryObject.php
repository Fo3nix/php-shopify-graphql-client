<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `storeCreditAccountCredit` mutation.
 */
class ShopifyStoreCreditAccountCreditPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "StoreCreditAccountCreditPayload";

    /**
     * The store credit account transaction that was created.
     */
    public function selectStoreCreditAccountTransaction(?ShopifyStoreCreditAccountCreditPayloadStoreCreditAccountTransactionArgumentsObject $argsObject = null): ShopifyStoreCreditAccountCreditTransactionQueryObject
    {
        $object = new ShopifyStoreCreditAccountCreditTransactionQueryObject("storeCreditAccountTransaction");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyStoreCreditAccountCreditPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyStoreCreditAccountCreditUserErrorQueryObject
    {
        $object = new ShopifyStoreCreditAccountCreditUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
