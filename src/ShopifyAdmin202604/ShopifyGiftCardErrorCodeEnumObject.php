<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `GiftCardUserError`.
 */
class ShopifyGiftCardErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is too big.
     */
    const TOO_BIG = "TOO_BIG";
    /**
     * The input value is too long.
     */
    const TOO_LONG = "TOO_LONG";
    /**
     * The input value is too short.
     */
    const TOO_SHORT = "TOO_SHORT";
    /**
     * The input value is already taken.
     */
    const TAKEN = "TAKEN";
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * Unexpected internal error happened.
     */
    const INTERNAL_ERROR = "INTERNAL_ERROR";
    /**
     * Missing a required argument.
     */
    const MISSING_ARGUMENT = "MISSING_ARGUMENT";
    /**
     * The input value should be greater than the minimum allowed value.
     */
    const GREATER_THAN = "GREATER_THAN";
    /**
     * The gift card's value exceeds the allowed limits.
     */
    const GIFT_CARD_LIMIT_EXCEEDED = "GIFT_CARD_LIMIT_EXCEEDED";
    /**
     * The customer could not be found.
     */
    const CUSTOMER_NOT_FOUND = "CUSTOMER_NOT_FOUND";
    /**
     * The recipient could not be found.
     */
    const RECIPIENT_NOT_FOUND = "RECIPIENT_NOT_FOUND";
}
