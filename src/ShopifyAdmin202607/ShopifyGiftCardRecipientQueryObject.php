<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a recipient who will receive the issued gift card.
 */
class ShopifyGiftCardRecipientQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardRecipient";

    /**
     * The message sent with the gift card.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }

    /**
     * The preferred name of the recipient who will receive the gift card.
     */
    public function selectPreferredName(): static
    {
        $this->selectField("preferredName");

        return $this;
    }

    /**
     * The recipient who will receive the gift card.
     */
    public function selectRecipient(?ShopifyGiftCardRecipientRecipientArgumentsObject $argsObject = null): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject("recipient");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The scheduled datetime on which the gift card will be sent to the recipient. The gift card will be sent within an hour of the specified datetime.
     */
    public function selectSendNotificationAt(): static
    {
        $this->selectField("sendNotificationAt");

        return $this;
    }
}
