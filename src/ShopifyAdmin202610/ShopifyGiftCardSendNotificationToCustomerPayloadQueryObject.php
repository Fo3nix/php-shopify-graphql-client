<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `giftCardSendNotificationToCustomer` mutation.
 */
class ShopifyGiftCardSendNotificationToCustomerPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardSendNotificationToCustomerPayload";

    /**
     * The gift card that was sent.
     */
    public function selectGiftCard(?ShopifyGiftCardSendNotificationToCustomerPayloadGiftCardArgumentsObject $argsObject = null): ShopifyGiftCardQueryObject
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
    public function selectUserErrors(?ShopifyGiftCardSendNotificationToCustomerPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyGiftCardSendNotificationToCustomerUserErrorQueryObject
    {
        $object = new ShopifyGiftCardSendNotificationToCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
