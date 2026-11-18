<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `GiftCardDeactivateUserError`.
 */
class ShopifyGiftCardDeactivateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The gift card could not be found.
     */
    const GIFT_CARD_NOT_FOUND = "GIFT_CARD_NOT_FOUND";
}
