<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `GiftCardSendNotificationToCustomerUserError`.
 */
class ShopifyGiftCardSendNotificationToCustomerUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The customer could not be found.
     */
    const CUSTOMER_NOT_FOUND = "CUSTOMER_NOT_FOUND";
    /**
     * The gift card could not be found.
     */
    const GIFT_CARD_NOT_FOUND = "GIFT_CARD_NOT_FOUND";
}
