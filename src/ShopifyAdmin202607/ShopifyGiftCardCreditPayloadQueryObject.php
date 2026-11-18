<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `giftCardCredit` mutation.
 */
class ShopifyGiftCardCreditPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardCreditPayload";

    /**
     * The gift card credit transaction that was created.
     */
    public function selectGiftCardCreditTransaction(?ShopifyGiftCardCreditPayloadGiftCardCreditTransactionArgumentsObject $argsObject = null): ShopifyGiftCardCreditTransactionQueryObject
    {
        $object = new ShopifyGiftCardCreditTransactionQueryObject("giftCardCreditTransaction");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyGiftCardCreditPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyGiftCardTransactionUserErrorQueryObject
    {
        $object = new ShopifyGiftCardTransactionUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
