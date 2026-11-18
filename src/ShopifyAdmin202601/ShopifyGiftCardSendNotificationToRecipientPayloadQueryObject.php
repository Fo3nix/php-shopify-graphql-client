<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `giftCardSendNotificationToRecipient` mutation.
 */
class ShopifyGiftCardSendNotificationToRecipientPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardSendNotificationToRecipientPayload";

    /**
     * The gift card that was sent.
     */
    public function selectGiftCard(?ShopifyGiftCardSendNotificationToRecipientPayloadGiftCardArgumentsObject $argsObject = null): ShopifyGiftCardQueryObject
    {
        $object = new ShopifyGiftCardQueryObject("giftCard");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyGiftCardSendNotificationToRecipientPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyGiftCardSendNotificationToRecipientUserErrorQueryObject
    {
        $object = new ShopifyGiftCardSendNotificationToRecipientUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
