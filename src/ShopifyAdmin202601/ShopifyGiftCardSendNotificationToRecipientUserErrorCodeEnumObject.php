<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `GiftCardSendNotificationToRecipientUserError`.
 */
class ShopifyGiftCardSendNotificationToRecipientUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The recipient could not be found.
     */
    const RECIPIENT_NOT_FOUND = "RECIPIENT_NOT_FOUND";
    /**
     * The gift card could not be found.
     */
    const GIFT_CARD_NOT_FOUND = "GIFT_CARD_NOT_FOUND";
}
