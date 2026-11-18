<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `giftCardDebit` mutation.
 */
class ShopifyGiftCardDebitPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardDebitPayload";

    /**
     * The gift card debit transaction that was created.
     */
    public function selectGiftCardDebitTransaction(?ShopifyGiftCardDebitPayloadGiftCardDebitTransactionArgumentsObject $argsObject = null): ShopifyGiftCardDebitTransactionQueryObject
    {
        $object = new ShopifyGiftCardDebitTransactionQueryObject("giftCardDebitTransaction");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyGiftCardDebitPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyGiftCardTransactionUserErrorQueryObject
    {
        $object = new ShopifyGiftCardTransactionUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
